<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('user')->insert([
                'username' => $faker->userName,
                'password' => $faker->password,
                'email' => $faker->email,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }

        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('novel')->insert([
                'name' => $faker->colorName,
                'author' => $faker->lastName,
                'genre' => $faker->word,
                'user_id' => $faker->numberBetween($min = 1, $max = 6),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }

        foreach (range(1,10) as $index) {
            DB::table('chapter')->insert([
                'title' => $faker->monthName,
                'novel_id' => $faker->numberBetween($min = 1, $max = 5),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }

        foreach (range(1,10) as $index) {
            DB::table('page')->insert([
                'txt' => $faker->text,
                'type' => $faker->word,
                'chapter_id' => $faker->numberBetween($min = 1, $max = 5),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}