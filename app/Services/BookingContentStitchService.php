<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\Content;
use App\Models\Field;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

/**
 * BookingContentStitchService
 *
 * Stitches the Booking module with the Content module by ensuring
 * that whenever a booking is created/updated/deleted, the content
 * system is notified to update availability metadata.
 *
 * Compatible with Filament's AfterSave hooks and Livewire's reactive state.
 */
class BookingContentStitchService
{
    /**
     * Called after a booking is created.
     * Updates the availability metadata on all related content entries.
     */
    public function onBookingCreated(Booking $booking): void
    {
        $field = $booking->field;

        if (! $field) {
            Log::warning('BookingContentStitchService: Booking created without a field.', [
                'booking_id' => $booking->id,
            ]);
            return;
        }

        $this->syncAvailabilityMetadata($field);
        $this->invalidateFieldCaches($field);

        Log::info('BookingContentStitchService: Availability synced after booking creation.', [
            'booking_id' => $booking->id,
            'field_id' => $field->id,
        ]);
    }

    /**
     * Called after a booking is updated (status change, time change, etc.)
     */
    public function onBookingUpdated(Booking $booking): void
    {
        $field = $booking->field;

        if ($field) {
            $this->syncAvailabilityMetadata($field);
            $this->invalidateFieldCaches($field);
        }
    }

    /**
     * Called after a booking is cancelled or deleted.
     */
    public function onBookingCancelled(Booking $booking): void
    {
        $field = $booking->field;

        if ($field) {
            $this->syncAvailabilityMetadata($field);
            $this->invalidateFieldCaches($field);
        }
    }

    /**
     * Recalculate and update availability metadata for all content
     * entries related to a given field.
     */
    public function syncAvailabilityMetadata(Field $field): void
    {
        $totalBookings = $field->bookings()->count();
        $pendingBookings = $field->bookings()->where('status', 'pending')->count();
        $confirmedBookings = $field->bookings()->where('status', 'confirmed')->count();
        $todayBookings = $field->bookings()->whereDate('start_time', today())->count();

        // Get next available slot (simple: find the latest confirmed booking's end time)
        $latestBooking = $field->bookings()
            ->where('status', 'confirmed')
            ->where('end_time', '>=', now())
            ->orderBy('end_time', 'desc')
            ->first();

        $metadata = [
            'total_bookings' => $totalBookings,
            'pending_bookings' => $pendingBookings,
            'confirmed_bookings' => $confirmedBookings,
            'today_bookings' => $todayBookings,
            'is_available' => $todayBookings < 12, // max 12 slots per day
            'next_available_after' => $latestBooking?->end_time?->toIso8601String(),
            'last_synced_at' => now()->toIso8601String(),
        ];

        // Update all content entries linked to this field
        $field->contents()->update([
            'availability_metadata' => json_encode($metadata),
        ]);

        // Also cache the metadata for fast dashboard access
        Cache::put(
            "field:{$field->id}:availability",
            $metadata,
            now()->addMinutes(5)
        );
    }

    /**
     * Invalidate all stitch-related caches for a field.
     */
    protected function invalidateFieldCaches(Field $field): void
    {
        $field->invalidateStitchCache();

        Cache::forget("field:{$field->id}:availability");
    }

    /**
     * Get cached availability metadata for a field.
     * Falls back to computing it if not cached.
     */
    public function getAvailability(Field $field): array
    {
        return Cache::remember(
            "field:{$field->id}:availability",
            now()->addMinutes(5),
            fn () => $this->computeAvailability($field)
        );
    }

    /**
     * Compute availability metadata without caching.
     */
    protected function computeAvailability(Field $field): array
    {
        $todayBookings = $field->bookings()->whereDate('start_time', today())->count();

        return [
            'total_bookings' => $field->bookings()->count(),
            'pending_bookings' => $field->bookings()->where('status', 'pending')->count(),
            'confirmed_bookings' => $field->bookings()->where('status', 'confirmed')->count(),
            'today_bookings' => $todayBookings,
            'is_available' => $todayBookings < 12,
            'last_synced_at' => now()->toIso8601String(),
        ];
    }
}
