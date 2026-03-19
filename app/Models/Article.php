<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'type',
        'language',
        'status',
        'featured_image',
        'published_at',
        // SEO
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
        'views',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Article $article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->title);
            }
        });
    }

    // SEO helpers

    public function getSeoTitle(): string
    {
        return $this->meta_title ?: $this->title;
    }

    public function getSeoDescription(): string
    {
        return $this->meta_description ?: Str::limit(strip_tags($this->excerpt ?: $this->content), 160);
    }

    public function getOgImage(): ?string
    {
        return $this->og_image ?: $this->featured_image;
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function incrementView(): void
    {
        $this->increment('views');
    }

    // Scopes

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeByLanguage($query, string $language)
    {
        return $query->where('language', $language);
    }

    public function scopeByType($query, string $type)
    {
        return $query->where('type', $type);
    }
}
