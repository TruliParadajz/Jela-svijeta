<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'meal_tag', 'meal_id', 'tag_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredient_meal', 'meal_id', 'ingredient_id');
    }
}
