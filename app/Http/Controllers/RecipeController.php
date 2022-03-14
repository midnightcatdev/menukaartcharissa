<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function create()
    {
        $view = view('recipe.create');
        $view->ingredients = Ingredient::pluck('name', 'id');

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'steps' => 'required',
            'ingredients' => 'required',
        ]);

        $recipe = Recipe::create($request->all());
        $recipe->ingredients()->sync($request->get('ingredients'));

        return redirect()->route('recipe.index')->with('success', 'Recept is aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
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
    public function edit(Recipe $recipe)
    {
        $view = view('recipe.edit');
        $view->ingredients = Ingredient::pluck('name', 'id');
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
    public function update(Request $request, Recipe $recipe)
    {
        $this->validate($request, [
            'name' => 'required',
            'steps' => 'required',
            'ingredients' => 'required',
        ]);

        $recipe->ingredients()->sync($request->get('ingredients'));
        $recipe->update($request->all());

        return redirect()->route('recipe.index')->with('success', 'Recept gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipe.index')->with('success', 'Recept verwijdert');
    }
}
