<?php

use Illuminate\Database\Seeder;
use App\Models\Coordinate;

class CoordinatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        foreach(range(1, 10) as $index)
        {
            Coordinate::create([
                'address' => $faker->streetAddress,
                'country' => 'France',
                'phone' => $faker->phoneNumber,
                'postal_code' => $faker->postcode,
                'user_id' => $index
            ]);
        }
    }
}
