<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [];
        $faker = Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

        DB::table('posts')->truncate();

        //generate dummy food
        for($i = 1; $i <= 25; $i++)
        {
            $posts[] = [
                'title' => $faker->unique()->foodName(),
                'description' => $faker->sentence(rand(5, 10)),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ];
        }
        DB::table('posts')->insert($posts);
    }
}
