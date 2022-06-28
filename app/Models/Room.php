<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'status_id', 'client_id'];

    // Many-To-One between Room and Client
    protected function Client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    // Many-To-One between Room and Booking
    protected function Booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'room_id', 'id');
    }

    // Many-To-One between Room and Category
    protected function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // Many-To-One between Room and Status
    protected function Status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
