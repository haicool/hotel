<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Client;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->numberBetween(101, 599),
            'category_id' => Category::all()->random()->id,
            'status_id' => Status::all()->random()->id,
            'client_id' => $this->faker->boolean ? Client::all()->random()->id : null,
            ];
    }
}
