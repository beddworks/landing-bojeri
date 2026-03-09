<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;

/**
 * HasStitch Trait
 *
 * Provides automatic SQL counts, joins, and caching for complex ERP dashboard widgets.
 * Compatible with Filament's table builders and Livewire's reactive state.
 */
trait HasStitch
{
    /**
     * Scope: add sub-select counts for all defined stitch relations.
     * Usage: Field::withStitchCounts()->get()
     */
    public function scopeWithStitchCounts(Builder $query): Builder
    {
        $relations = $this->getStitchCountRelations();

        if (! empty($relations)) {
            $query->withCount($relations);
        }

        return $query;
    }

    /**
     * Scope: add joins for complex ERP dashboard widgets.
     * Usage: Booking::withStitchJoins()->get()
     */
    public function scopeWithStitchJoins(Builder $query): Builder
    {
        $joins = $this->getStitchJoinDefinitions();

        foreach ($joins as $join) {
            $query->leftJoin(
                $join['table'],
                $join['first'],
                $join['operator'] ?? '=',
                $join['second']
            );
        }

        return $query;
    }

    /**
     * Get a cached count for a relation.
     * Cache TTL: 5 minutes by default.
     */
    public function getCachedCount(string $relation, int $ttlSeconds = 300): int
    {
        $cacheKey = sprintf(
            'stitch:%s:%s:%s:count',
            static::class,
            $this->getKey(),
            $relation
        );

        return Cache::remember($cacheKey, $ttlSeconds, function () use ($relation) {
            return $this->{$relation}()->count();
        });
    }

    /**
     * Get a cached existence check for a relation.
     */
    public function getCachedExists(string $relation, int $ttlSeconds = 300): bool
    {
        $cacheKey = sprintf(
            'stitch:%s:%s:%s:exists',
            static::class,
            $this->getKey(),
            $relation
        );

        return Cache::remember($cacheKey, $ttlSeconds, function () use ($relation) {
            return $this->{$relation}()->exists();
        });
    }

    /**
     * Invalidate all stitch caches for this model instance.
     */
    public function invalidateStitchCache(): void
    {
        $relations = $this->getStitchCountRelations();

        foreach ($relations as $relation) {
            $countKey = sprintf('stitch:%s:%s:%s:count', static::class, $this->getKey(), $relation);
            $existsKey = sprintf('stitch:%s:%s:%s:exists', static::class, $this->getKey(), $relation);
            Cache::forget($countKey);
            Cache::forget($existsKey);
        }
    }

    /**
     * Define which relations should have counts added via withStitchCounts().
     * Override in your model to customize.
     */
    protected function getStitchCountRelations(): array
    {
        return [];
    }

    /**
     * Define join definitions for withStitchJoins().
     * Override in your model to customize.
     *
     * Return format:
     * [
     *     ['table' => 'bookings', 'first' => 'fields.id', 'operator' => '=', 'second' => 'bookings.field_id'],
     * ]
     */
    protected function getStitchJoinDefinitions(): array
    {
        return [];
    }
}
