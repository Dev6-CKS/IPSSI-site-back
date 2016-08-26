<?php

use Illuminate\Database\Seeder;
use App\Models\Cv;

class CvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 10) as $index)
        {
            Cv::create([
                'cvTitle' => $faker->jobTitle,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ]);
        }
    }
}
