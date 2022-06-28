<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    // One-to-Many between Status and Room
    protected function Room(): HasMany{
        return $this->hasMany(Room::class, 'status_id', 'id');
    }
}
