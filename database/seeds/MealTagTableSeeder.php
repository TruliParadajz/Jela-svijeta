<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Meal;
use App\Tag;

class MealTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $mealIds = DB::table('meals')->pluck('id')->all();
        $tagIds = DB::table('tags')->pluck('id')->all();

        foreach($mealIds as $meal)
        {
            $randomNum = rand(1, 4);
            for($num = 1; $num <= $randomNum; $num ++)
            {
                DB::table('meal_tag')->insert([
                    'meal_id' => $meal,
                    'tag_id' => $faker->randomElement($tagIds)                          
                ]);
            }            
        }
    }
}
