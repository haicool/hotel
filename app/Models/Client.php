<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Client extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    public function registerMediaCollection(): void
    {
        $this->addMediaCollection('image')->singleFile();
    }

    // One-to-Many between Client and Room
    protected function Room(): HasMany
    {
        return $this->hasMany(Room::class, 'client_id', 'id');
    }

    // One-to-Many between Client and Booking
    protected function Booking(): HasMany
    {
        return $this->hasMany(Booking::class, 'client_id', 'id');
    }
}
