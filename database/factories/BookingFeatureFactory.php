<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingFeature>
 */
class BookingFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'booking_id' => Booking::all()->random()->id,
            'feature_id' => Feature::all()->random()->id,
        ];
    }
}
