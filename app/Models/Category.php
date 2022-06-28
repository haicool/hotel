<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;


    // One-to-Many between Category and Room
    protected function Room(): HasMany{
        return $this->hasMany(Room::class, 'category_id', 'id');
    }
}
