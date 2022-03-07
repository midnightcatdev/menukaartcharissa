<?php

namespace App\Models;

use App\Http\Controllers\FoodtypeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodtype extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    /**
     * Get the daypart that owns the foodtype.
     */
    public function daypart()
    {
        return $this->belongsTo(Daypart::class);
    }

    /**
     * The dishes that belong to the foodtypes
     */
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
