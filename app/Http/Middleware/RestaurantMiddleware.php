<?php

namespace App\Http\Middleware;

use App\Models\Restaurant;
use Closure;
use Illuminate\Http\Request;

class RestaurantMiddleware
{

    public function handle(Request $request, Closure $next, ...$guards)
    {
        $restaurant_str = $request->route()->parameter('restaurant');
        $restaurant_obj = Restaurant::where('name', $restaurant_str)->firstOrFail();
        view()->share('restaurant', $restaurant_obj);
        Restaurant::setCurrentRestaurant($restaurant_obj);
        return $next($request);
    }
}


