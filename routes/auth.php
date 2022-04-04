<?php

Route::resource('daypart', \App\Http\Controllers\DaypartController::class);
Route::resource('foodtype', \App\Http\Controllers\FoodtypeController::class);

//Route::delete('dish/destroy-selected', [\App\Http\Controllers\DishController::class, 'destroySelected'])->name('dish.destroy-selected');
Route::any('dish/multi-edit', [\App\Http\Controllers\DishController::class, 'multipleEdit'])->name('dish.multi-edit');
Route::resource('dish', \App\Http\Controllers\DishController::class);

Route::resource('recipe', \App\Http\Controllers\RecipeController::class);
Route::resource('ingredient', \App\Http\Controllers\IngredientController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



