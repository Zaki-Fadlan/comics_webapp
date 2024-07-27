<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ComicsChapter extends Model
{
    use HasFactory;
    public function comics(): BelongsTo
    {
        return $this->belongsTo(Comic::class, 'comic_id');
    }
}
