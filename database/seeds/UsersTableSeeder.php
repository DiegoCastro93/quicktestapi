<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('quick123');

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Quick',
            'email' => 'admin@quick.com',
            'password' => $password,
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->freeEmail,
                'password' => $faker->password,
                'age' => $faker->numberBetween($min = 1, $max = 99),
                'image' => $faker->imageUrl,
                'description' => $faker->text,
                'api_token' => str_random(50)
            ]);
        }
    }
}
