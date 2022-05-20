<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public static $restaurant;

    protected $fillable = [
        'restaurant_name'
    ];

    public static function setCurrentRestaurant($restaurant)
    {
        self::$restaurant = $restaurant;
    }

    public static function getCurrentRestaurant()
    {
        return self::$restaurant;
    }

    /**
     * Get the dishes for the restaurant
     */
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    /**
     * Get the dayparts for the restaurant
     */
    public function dayparts()
    {
        return $this->hasMany(Daypart::class);
    }

    /**
     * Get the ingredients for the restaurant
     */
    public function ingredients()
    {
        return $this->hasMany(Daypart::class);
    }

    /**
     * Get the recipes for the restaurant
     */
    public function recipes()
    {
        return $this->hasMany(Daypart::class);
    }
}
