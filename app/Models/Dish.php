<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'allergies',
        'prijs',
    ];

    /**
     * The roles that belong to the Dish.
     */
    public function foodtype()
    {
        return $this->belongsTo(Foodtype::class);
    }

    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }
}
