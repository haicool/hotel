<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Many-To-One relationship between Booking and Client
    protected function room(): BelongsTo
    {
        return $this->belongsTo(room::class, 'room_id', 'id');
    }
    // Many-To-One relationship between Booking and Client
    protected function Client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    // Many-To-Many relationship between Booking and Feature
    protected function Feature(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }

}
