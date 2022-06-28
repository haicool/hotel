<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           CategorySeeder::class,
           StatusSeeder::class,
           ClientSeeder::class,
           RoomSeeder::class,
           BookingSeeder::class,
           FeatureSeeder::class,
           BookingFeatureSeeder::class,
        ]);
    }
}
