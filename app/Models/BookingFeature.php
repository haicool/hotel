<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingFeature extends Model
{
    use HasFactory;

    protected $table = 'booking_feature';

    protected $guarded = [];
}
