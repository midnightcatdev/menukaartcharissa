<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'steps'
    ];

    /**
     * Get the dish that uses the recipe.
     */
    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    /**
     * The ingredients that belong to the recipe.
     */
        public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
