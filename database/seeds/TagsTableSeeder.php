<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Factory;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [];
        $faker = Factory::create();

        DB::table('tags')->truncate();

        //generate dummy categories
        for($i = 1; $i <= 10; $i ++)
        {
            $title = $faker->unique()->word();
            $tags[] = [
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ];
            $title = $faker->word();
        }
        DB::table('tags')->insert($tags);
    }
}
