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
            DB::table('chapter')->insert([
                'title' => $faker->lastName,
                'txt' => $faker->text,
                'novel_id' => $faker->numberBetween($min = 1, $max = 5),
            ]);
        }
    }
}