<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ComicsStatus extends Model
{
    use HasFactory;
    public function comics(): HasMany
    {
        return $this->hasMany(Comic::class);
    }
}
