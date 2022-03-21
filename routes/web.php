<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailtrapExample;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', [App\Http\Controllers\DaypartController::class, 'menu'])->name('menukaart');



//Route::get( '/email', function() {
//  return new WelcomeMail();
//});

//route for mailing uri '/endpoint', function
Route::get('/email', function () {
//    Mail::to('ccvandelden@msn.com')->send(New WelcomeMail());
    return new \App\Mail\WelcomeMail();
});

Route::get('/send-mail', function () {

//    Mail::to('ccvandelden@msn.com')->send(new MailtrapExample());
//    return new MailtrapExample();
    return 'A message has been sent to Mailtrap!';

});
