<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeStoreRequest;
use App\Models\Dish;
use App\Models\Ingredient;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($restaurant)
    {
        $view = view('recipe.index');
        $view->ingredients = Ingredient::pluck('name', 'id');
        $view->recipes = Recipe::paginate(8);

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurant, Recipe $recipe)
    {
        $this->authorize('create', $recipe);
        $view = view('recipe.create');
        $view->ingredients = Ingredient::pluck('name', 'id');
        $view->dishes = Dish::pluck('name', 'id');

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($restaurant, RecipeStoreRequest $request)
    {
        $recipe = Recipe::create($request->all());
        $recipe->dish()->associate(Dish::find($request->get('dish_id')))->save();
        $recipe->ingredients()->sync($request->get('ingredients'));

        return redirect()->route('recipe.index', $restaurant)->with('success', 'Recept is aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant, Recipe $recipe)
    {
        $view = view('recipe.show');
        $view->recipe = $recipe;

        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($restaurant, Recipe $recipe)
    {
        $view = view('recipe.edit');
        $view->ingredients = Ingredient::pluck('name', 'id');
        $view->dishes = Dish::pluck('name', 'id');
        $view->recipe = $recipe;

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($restaurant, RecipeStoreRequest $request, Recipe $recipe)
    {
        $this->authorize('update', $recipe);
        $recipe->ingredients()->sync($request->get('ingredients'));
        $recipe->dish()->associate(Dish::find($request->get('dish_id')))->save();
        $recipe->update($request->all());

        return redirect()->route('recipe.index', $restaurant)->with('success', 'Recept gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant, Recipe $recipe)
    {
        $this->authorize('delete', $recipe);
        $recipe->delete();

        return redirect()->route('recipe.index', $restaurant)->with('success', 'Recept verwijdert');
    }
}
