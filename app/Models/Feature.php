<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    // Many-To-Many relationship between Feature and Booking
    public function Booking(){
        return $this->belongsToMany(Booking::class);
    }
}
