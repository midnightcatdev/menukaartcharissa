<?php

Route::resource('daypart', \App\Http\Controllers\DaypartController::class);
Route::resource('foodtype', \App\Http\Controllers\FoodtypeController::class);

Route::get('dish/multi-select', [\App\Http\Controllers\DishController::class, 'selectItems'])->name('dish.multi-select');
Route::delete('dish/multi-select-destroy', [\App\Http\Controllers\DishController::class, 'multiSelectDestroy'])->name('dish.multi-select-destroy');

Route::get('dish/multi-edit', [\App\Http\Controllers\DishController::class, 'multiEdit'])->name('dish.multi-edit');
Route::put('dish/multi-update-btw', [\App\Http\Controllers\DishController::class, 'multiUpdateBtw'])->name('dish.multi-update-btw');
Route::put('dish/multi-update', [\App\Http\Controllers\DishController::class, 'multiUpdate'])->name('dish.multi-update');
Route::resource('dish', \App\Http\Controllers\DishController::class);

Route::resource('recipe', \App\Http\Controllers\RecipeController::class);
Route::resource('ingredient', \App\Http\Controllers\IngredientController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);

//Route::get('/email/verify', function () {
//    return view('auth.verify');
//})->middleware('auth')->name('verification.notice');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
