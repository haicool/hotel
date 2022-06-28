<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' => Client::all()->random()->id,
            'room_id' => Room::all()->random()->id,
            'price' => $this->faker->numberBetween(1000, 15000),
            'from'  => $this->faker->dateTime(),
            'to'  => $this->faker->dateTime(),
        ];
    }
}
