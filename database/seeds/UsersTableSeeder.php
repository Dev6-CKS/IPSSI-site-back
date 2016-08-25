<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
            User::create([
                'lastname' => $faker->lastName,
                'firstname' => $faker->firstName,
                'email' => $faker->email,
                'email_valid' => 0,
                'last_connected' => date('Y-m-d H:i:s'),
                'password' => bcrypt('secret')
            ]);
        }
    }
}
