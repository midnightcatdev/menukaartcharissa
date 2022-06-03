<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services. Check package.json for bootstrap version.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        VerifyEmail::createUrlUsing(function ($notifiable) {
            return URL::temporarySignedRoute(
                'verification.verify',
                Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                [
                    'restaurant' => 'kaas',
//                    'restaurant' => $restaurant->getKey(),
                    'id' => $notifiable->getKey(),
                    'hash' => sha1($notifiable->getEmailForVerification()),
                ],

            );
        });
//        VerifyEmail::toMailUsing(function ($notifiable) {
//            dd('44');
//            return URL::temporarySignedRoute(
//                'verification.notice_aaa',
//                Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
//                [
//                    'restaurant' => 'KAAS',
//                ],
//
//            );
//        });

        //verification.notice
    }
}
