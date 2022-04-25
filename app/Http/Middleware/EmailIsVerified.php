<?php

namespace App\Http\Middleware;

use Closure;

class EmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, Closure $next)
    {

//        if (email_is_verfied = null) {

//        return redirect()->route('verification.notice');
//            } else {
//            return $next($request);
//        }
//
//
////        return $view;
//
//        return response()->view('auth.verify');
//
////        return redirect()->route('auth.verify')->with('success', 'Recept is aangemaakt');
//
////            }
    }
}
