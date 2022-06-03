<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientStoreRequest;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($restaurant)
    {
        $view = view('ingredient.index');

        $view->ingredients = Ingredient::paginate(8);

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurant, Ingredient $ingredient)
    {
        $this->authorize('create', $ingredient);
        $view = view('ingredient.create');

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($restaurant, IngredientStoreRequest $request)
    {
        $ingredient = Ingredient::create($request->all());

        return redirect()->route('ingredient.index', $restaurant)->with('success', 'Ingredient is aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant, Ingredient $ingredient)
    {
        $view = view('ingredient.show');
        $view->ingredient = $ingredient;

        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($restaurant, Ingredient $ingredient)
    {
        $view = view('ingredient.edit');
        $view->ingredient = $ingredient;

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($restaurant, IngredientStoreRequest $request, Ingredient $ingredient)
    {
        $this->authorize('update', $ingredient);
        $ingredient->update($request->all());

        return redirect()->route('ingredient.index', $restaurant)->with('success', 'Ingredient gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant, Ingredient $ingredient)
    {
        $this->authorize('delete', $ingredient);
        $ingredient->delete();

        return redirect()->route('ingredient.index', $restaurant)->with('success', 'Ingredient verwijdert');
    }
}
