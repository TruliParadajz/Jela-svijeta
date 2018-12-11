<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function meals()
    {
        return $this->belongsToMany('App\Meal', 'ingredient_meal', 'ingredient_id', 'meal_id');
    }
}
