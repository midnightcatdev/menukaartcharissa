<?php

Route::resource('daypart', \App\Http\Controllers\DaypartController::class);
Route::resource('foodtype', \App\Http\Controllers\FoodtypeController::class);

Route::delete('dish/destroy-selected', [\App\Http\Controllers\DishController::class, 'destroySelected'])->name('dish.destroy-selected');
Route::get('dish/multi-edit', [\App\Http\Controllers\DishController::class, 'multiEdit'])->name('dish.multi-edit');
//Route::get('dish/multi-update', [\App\Http\Controllers\DishController::class, 'updateBtw'])->name('dish.multi-update');
Route::put('dish/multi-update', [\App\Http\Controllers\DishController::class, 'multiUpdate'])->name('dish.multi-update');
Route::resource('dish', \App\Http\Controllers\DishController::class);

Route::resource('recipe', \App\Http\Controllers\RecipeController::class);
Route::resource('ingredient', \App\Http\Controllers\IngredientController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
