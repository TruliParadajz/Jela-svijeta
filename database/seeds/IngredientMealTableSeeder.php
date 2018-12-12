<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Meal;
use App\Ingredient;

class IngredientMealTableSeeder extends Seeder
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
        $ingredientIds = DB::table('ingredients')->pluck('id')->all();

        foreach($mealIds as $meal)
        {
            $randomNum = rand(4, 8);
            for($num = 1; $num <= $randomNum; $num ++)
            {
                DB::table('ingredient_meal')->insert([
                    'meal_id' => $meal,
                    'ingredient_id' => $faker->randomElement($ingredientIds)                          
                ]);
            }           
        }
    }
}
