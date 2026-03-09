<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Field;
use App\Services\BookingContentStitchService;
use Carbon\Carbon;
use Livewire\Component;

class BookingModal extends Component
{
    public ?Field $field = null;
    public bool $showModal = false;

    // Form state
    public string $date = '';
    public string $startTime = '';
    public string $endTime = '';
    public string $notes = '';
    public float $totalPrice = 0;

    // Validation
    protected function rules(): array
    {
        return [
            'date' => 'required|date|after_or_equal:today',
            'startTime' => 'required|date_format:H:i',
            'endTime' => 'required|date_format:H:i|after:startTime',
            'notes' => 'nullable|string|max:500',
        ];
    }

    public function openModal(int $fieldId): void
    {
        $this->field = Field::findOrFail($fieldId);
        $this->reset(['date', 'startTime', 'endTime', 'notes', 'totalPrice']);
        $this->date = now()->format('Y-m-d');
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->field = null;
    }

    // Reactive price calculation
    public function updatedStartTime(): void
    {
        $this->calculatePrice();
    }

    public function updatedEndTime(): void
    {
        $this->calculatePrice();
    }

    protected function calculatePrice(): void
    {
        if ($this->field && $this->startTime && $this->endTime) {
            try {
                $start = Carbon::createFromFormat('H:i', $this->startTime);
                $end = Carbon::createFromFormat('H:i', $this->endTime);
                $hours = $start->diffInMinutes($end) / 60;

                if ($hours > 0) {
                    $this->totalPrice = round($this->field->price_per_hour * $hours, 2);
                }
            } catch (\Exception $e) {
                $this->totalPrice = 0;
            }
        }
    }

    public function createBooking(): void
    {
        $this->validate();

        $startDateTime = Carbon::parse("{$this->date} {$this->startTime}");
        $endDateTime = Carbon::parse("{$this->date} {$this->endTime}");

        // Check for overlapping bookings
        $overlap = Booking::where('field_id', $this->field->id)
            ->where('status', '!=', 'cancelled')
            ->where(function ($query) use ($startDateTime, $endDateTime) {
                $query->whereBetween('start_time', [$startDateTime, $endDateTime])
                    ->orWhereBetween('end_time', [$startDateTime, $endDateTime])
                    ->orWhere(function ($q) use ($startDateTime, $endDateTime) {
                        $q->where('start_time', '<=', $startDateTime)
                            ->where('end_time', '>=', $endDateTime);
                    });
            })
            ->exists();

        if ($overlap) {
            $this->addError('startTime', 'This time slot is already booked.');
            return;
        }

        $booking = Booking::create([
            'field_id' => $this->field->id,
            'user_id' => auth()->id(),
            'start_time' => $startDateTime,
            'end_time' => $endDateTime,
            'status' => 'pending',
            'total_price' => $this->totalPrice,
            'notes' => $this->notes,
        ]);

        // Trigger stitch service
        app(BookingContentStitchService::class)->onBookingCreated($booking);

        $this->closeModal();

        $this->dispatch('booking-created');
        session()->flash('success', 'Booking created successfully! Awaiting confirmation.');
    }

    public function render()
    {
        return view('livewire.booking-modal');
    }
}
