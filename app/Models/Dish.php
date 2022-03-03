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
