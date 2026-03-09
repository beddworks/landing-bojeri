<?php

namespace App\Models;

use App\Traits\HasStitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory, HasStitch;

    protected $fillable = [
        'field_id',
        'user_id',
        'start_time',
        'end_time',
        'status',
        'total_price',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'start_time' => 'datetime',
            'end_time' => 'datetime',
            'total_price' => 'decimal:2',
        ];
    }

    // ─── Relationships ───────────────────────────────────

    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // ─── Scopes ──────────────────────────────────────────

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }

    public function scopeForDate($query, $date)
    {
        return $query->whereDate('start_time', $date);
    }

    // ─── Helpers ─────────────────────────────────────────

    public function getDurationInHoursAttribute(): float
    {
        return $this->start_time->diffInMinutes($this->end_time) / 60;
    }
}
