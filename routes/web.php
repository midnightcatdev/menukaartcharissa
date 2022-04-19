<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/', [App\Http\Controllers\DaypartController::class, 'menu'])->name('menukaart');
Route::resource('contact', \App\Http\Controllers\ContactController::class);

//
//Route::get('/email/verify', function () {
//    return view('auth.verify-email');
//})->middleware('auth')->name('verification.notice');
