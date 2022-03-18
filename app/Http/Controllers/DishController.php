<?php

namespace App\Http\Controllers;

use App\Http\Requests\DishStoreRequest;
use App\Models\Dish;
use App\Models\Foodtype;
use App\Models\Recipe;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = view('dish.index');
        $view->dishes = Dish::paginate(5);

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = view('dish.create');
        $view->foodtypes = Foodtype::pluck('name', 'id');
        $view->recipes = Recipe::pluck('name', 'id');

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DishStoreRequest $request)
    {
        $dish = Dish::create($request->all());
        $foodtype = Foodtype::find($request->get('foodtype_id'));
        $recipes = Recipe::find($request->get('recipes'));

        $dish->recipes()->saveMany($recipes);
        $dish->foodtype()->associate($foodtype)->save();

        $name = $request->file('photo_name')->getClientOriginalName();
        $path = $request->file('photo_name')->store('public/images');

        $dish->photo_name = $name;
        $dish->path = $path;

        $dish->save();

        return redirect()->route('dish.index')->with('success', 'Gerecht is aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        $view = view('dish.show');

        $view->dish = Dish::with('recipes', 'recipes.ingredients')->find($dish->id);

        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $view = view('dish.edit');
        $view->foodtypes = Foodtype::pluck('name', 'id');
        $view->recipes = Recipe::pluck('name', 'id');
        $view->dish = $dish;

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DishStoreRequest $request, Dish $dish)
    {
        $dish->update($request->all());
        $foodtype = Foodtype::find($request->get('foodtype_id'));
        $recipes = Recipe::find($request->get('recipes'));

        $dish->recipes()->saveMany($recipes);
        $dish->foodtype()->associate($foodtype)->save();

        return redirect()->route('dish.index')->with('success', 'Gerecht gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('dish.index')->with('success', 'Gerecht verwijdert');
    }
}
