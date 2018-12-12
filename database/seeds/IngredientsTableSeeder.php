<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Str;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [];
        $faker = Factory::create();

        DB::table('ingredients')->truncate();

        //generate dummy categories
        for($i = 1; $i <= 20; $i ++)
        {
            $title = $faker->word();
            $ingredients[] = [
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ];
            $title = $faker->word();
        }
        DB::table('ingredients')->insert($ingredients);
    
    }
}
