<?php

namespace App\Models;

use App\Traits\HasStitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory, HasStitch;

    protected $fillable = [
        'content_id',
        'category',
        'tags',
        'featured_image',
        'author_id',
    ];

    protected function casts(): array
    {
        return [
            'tags' => 'array',
        ];
    }

    // ─── Relationships ───────────────────────────────────

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // ─── Scopes ──────────────────────────────────────────

    public function scopeByCategory($query, string $category)
    {
        return $query->where('category', $category);
    }
}
