<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meals = [];
        $faker = Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

        DB::table('meals')->truncate();

        //generate dummy food
        for($i = 1; $i <= 25; $i++)
        {
            $meals[] = [
                'title' => $faker->unique()->foodName(),
                'description' => $faker->sentence(rand(5, 10)),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'deleted_at' => NULL,
                'status' =>  'created'
            ];
        }       
        
        DB::table('meals')->insert($meals);

        //Custom
        DB::table('meals')->where('id', '=', '2')->update(['created_at' => '2018-11-10 19:42:24']);
        DB::table('meals')->where('id', '=', '1')->update(['created_at' => '2018-11-10 19:42:24']);
        DB::table('meals')->where('id', '=', '1')->update(['updated_at' => '2018-11-10 19:42:24']);
        DB::table('meals')->where('id', '=', '1')->update(['deleted_at' => '2018-12-10 19:42:24']);

        //Custom update
        DB::table('meals')->whereColumn('updated_at', '>', 'created_at')->update(['status' => 'updated']);
        DB::table('meals')->whereColumn('deleted_at', '>', 'updated_at')->update(['status' => 'deleted']);
    }
}
