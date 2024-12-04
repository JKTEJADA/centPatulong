<?php
// database/seeders/RouteSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('routes')->insert([
                'route_id' => Str::uuid()->toString(),
                'route_name' => $faker->word,
                'departure_location' => $faker->city,
                'destination' => $faker->city,
                'distance' => $faker->numberBetween(50, 500),
                'duration' => $faker->numberBetween(1, 10) . ' hours',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}