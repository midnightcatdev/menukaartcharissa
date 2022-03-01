<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daypart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get the foodtypes for the daypart
     */
    public function foodtypes()
    {
        return $this->hasMany(Foodtype::class);
    }
}



