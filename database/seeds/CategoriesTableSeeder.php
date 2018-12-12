<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];
        $faker = Factory::create();

        DB::table('categories')->truncate();

        //generate dummy categories
        for($i = 1; $i <= 10; $i ++)
        {
            $title = $faker->unique()->word();
            $categories[] = [
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ];
            $title = $faker->word();
        }
        DB::table('categories')->insert($categories);

        //Category_id foreign key
        for($meal_id = 1; $meal_id <= 25; $meal_id++)
        {
            $category_id = rand(1, 10);
            DB::table('meals')->where('id', $meal_id)->update(['category_id' => $category_id]);
        }
    }
}
