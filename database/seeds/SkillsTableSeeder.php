<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 10) as $index) {
       		Skill::create([
				'content' => $faker->jobTitle,
	            'cv_id' => $index
			]);
        }
    }
}
