<?php

namespace App\Models;

use App\Traits\HasStitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Field extends Model
{
    use HasFactory, HasStitch;

    protected $fillable = [
        'name',
        'type',
        'location',
        'price_per_hour',
        'owner_id',
        'status',
        'metadata',
        'description',
        'image',
    ];

    protected function casts(): array
    {
        return [
            'metadata' => 'array',
            'price_per_hour' => 'decimal:2',
        ];
    }

    // ─── Relationships ───────────────────────────────────

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class, 'related_field_id');
    }

    // ─── Scopes ──────────────────────────────────────────

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeByType($query, string $type)
    {
        return $query->where('type', $type);
    }

    // ─── HasStitch Configuration ─────────────────────────

    protected function getStitchCountRelations(): array
    {
        return ['bookings', 'contents'];
    }

    protected function getStitchJoinDefinitions(): array
    {
        return [
            [
                'table' => 'bookings',
                'first' => 'fields.id',
                'operator' => '=',
                'second' => 'bookings.field_id',
            ],
        ];
    }
}
