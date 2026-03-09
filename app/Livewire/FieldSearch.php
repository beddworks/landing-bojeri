<?php

namespace App\Livewire;

use App\Models\Field;
use Livewire\Component;
use Livewire\WithPagination;

class FieldSearch extends Component
{
    use WithPagination;

    public string $search = '';
    public string $type = '';
    public string $sortBy = 'name';
    public string $sortDirection = 'asc';

    // Reset pagination when filters change
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingType(): void
    {
        $this->resetPage();
    }

    public function setType(string $type): void
    {
        $this->type = $this->type === $type ? '' : $type;
        $this->resetPage();
    }

    public function sort(string $column): void
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function render()
    {
        $fields = Field::query()
            ->active()
            ->when($this->search, fn ($q) => $q->where('name', 'like', "%{$this->search}%")
                ->orWhere('location', 'like', "%{$this->search}%")
            )
            ->when($this->type, fn ($q) => $q->byType($this->type))
            ->withCount('bookings')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(12);

        $types = [
            'futsal' => ['label' => 'Futsal', 'icon' => '⚽'],
            'badminton' => ['label' => 'Badminton', 'icon' => '🏸'],
            'basketball' => ['label' => 'Basketball', 'icon' => '🏀'],
            'tennis' => ['label' => 'Tennis', 'icon' => '🎾'],
            'volleyball' => ['label' => 'Volleyball', 'icon' => '🏐'],
            'swimming' => ['label' => 'Swimming', 'icon' => '🏊'],
        ];

        return view('livewire.field-search', [
            'fields' => $fields,
            'types' => $types,
        ]);
    }
}
