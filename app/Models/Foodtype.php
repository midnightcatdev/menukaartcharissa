<?php

namespace App\Models;

use App\Http\Controllers\FoodtypeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodtype extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        
    ];

    /**
     * Get the daypart that owns the foodtype.
     */
    public function daypart()
    {
        return $this->belongsTo(Daypart::class);
    }

    /**
     * Get the foodtype that owns the dish.
     */
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
