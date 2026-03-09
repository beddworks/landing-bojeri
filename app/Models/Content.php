<?php

namespace App\Models;

use App\Traits\HasStitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Content extends Model
{
    use HasFactory, HasStitch;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'type',
        'related_field_id',
        'availability_metadata',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'availability_metadata' => 'array',
            'published_at' => 'datetime',
        ];
    }

    // ─── Boot ────────────────────────────────────────────

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Content $content) {
            if (empty($content->slug)) {
                $content->slug = Str::slug($content->title);
            }
        });
    }

    // ─── Relationships ───────────────────────────────────

    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class, 'related_field_id');
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    // ─── Scopes ──────────────────────────────────────────

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }
}
