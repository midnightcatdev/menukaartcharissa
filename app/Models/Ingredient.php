<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit',
        'value',
    ];

    /**
     * The recipes that belong to the ingredient.
     */
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }
}
