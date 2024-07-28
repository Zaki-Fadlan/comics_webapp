<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = [
        'alternate_title',
        'title',
        'slug_title',
        'author',
        'released_at',
        'cover',
        'type_id',
        'synopsis',
    ];
    protected $dates = ['released_at'];

    protected $with = ['comics_type'];

    // Relasi dengan tabel comics_types
    public function comics_type(): BelongsTo
    {
        return $this->belongsTo(ComicsType::class, 'type_id');
    }
    public function comics_status(): BelongsTo
    {
        return $this->belongsTo(ComicsType::class, 'status_id');
    }
    public function chapters(): HasMany
    {
        return $this->hasMany(ComicsChapter::class);
    }
    public function getReleasedAtAttribute($value)
    {
        return Carbon::parse($value);
    }
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'comic_genres');
    }
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );
        $query->when(
            $filters['genres'] ?? false,
            fn ($query, $genre) =>
            $query->whereHas('genres', fn ($query) => $query->whereIn('genre_id', $genre))
        );
        $query->when(
            $filters['types'] ?? false,
            fn ($query, $types) =>
            $query->whereHas('comics_type', fn ($query) => $query->whereIn('id', $types))
        );
        $query->when(
            $filters['status'] ?? false,
            fn ($query, $status) =>
            $query->whereHas('comics_status', fn ($query) => $query->whereIn('id', $status))
        );
    }
}
