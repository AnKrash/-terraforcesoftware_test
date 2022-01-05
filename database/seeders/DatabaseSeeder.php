<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Client;
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
        $cars = Car::factory(100)->create();
        $clients = Client::factory(100)->create();

        $clients->each(function ($client) use ($cars) {
            $client->cars()->attach(
                $cars->random(rand(1, 20))->pluck('id')->toArray()
            );
        });

    }
}
