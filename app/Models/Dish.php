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
        'photo_name',
        'description',
        'allergies',
        'price',
        'path',
    ];

    /**
     * The foodtype that belong to the Dish.
     */
    public function foodtype()
    {
        return $this->belongsTo(Foodtype::class);
    }

    /**
     * The recipes that belong to the Dish.
     */
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    /**
     * Get the restaurant that owns the dish.
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
