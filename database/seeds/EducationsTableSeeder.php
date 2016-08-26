<?php

use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 10) as $index) {
       		Education::create([
				'title' => $faker->jobTitle,
	            'start_date' => $faker->date,
	            'end_date' => $faker->date,
	            'content' => 'Hodor! Hodor hodor, HODOR hodor, hodor hodor?! Hodor, hodor. Hodor. Hodor, hodor HODOR hodor, hodor hodor, hodor, hodor hodor. Hodor hodor - hodor; hodor HODOR hodor, hodor hodor hodor! Hodor hodor - hodor hodor hodor. Hodor! Hodor hodor, hodor hodor hodor hodor HODOR hodor, hodor hodor, hodor, hodor hodor. Hodor! Hodor hodor, HODOR hodor, hodor hodor, hodor, hodor hodor. Hodor. Hodor hodor, hodor. Hodor hodor hodor hodor hodor hodor. Hodor hodor HODOR! Hodor hodor; hodor hodor hodor.',
	            'cv_id' => $index
			]);
        }
    }
}
