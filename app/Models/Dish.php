<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'allergies',
        'price',
        'recipe_id'
    ];

    /**
     * The foodtype that belong to the Dish.
     */
    public function foodtype()
    {
        return $this->belongsTo(Foodtype::class);
    }

//    /**
//     * The recipe that belongs to the dish.
//     */
//    public function recipe()
//    {
//        return $this->hasOne(Recipe::class);
//    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
