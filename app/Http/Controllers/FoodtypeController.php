<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodtypeStoreRequest;
use App\Models\Daypart;
use App\Models\Foodtype;
use App\Models\Restaurant;

class FoodtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($restaurant)
    {
//        dd($restaurant);

        $view = view('foodtype.index');
        Restaurant::where('name', $restaurant)->firstOrFail();
//        $view->foodtypes = Restaurant::getCurrentRestaurant()->footype;
        $view->foodtypes = Foodtype::paginate(8);

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurant, Foodtype $foodtype)
    {
        $this->authorize('create', $foodtype);
        $view = view('foodtype.create');
        $view->dayparts = Daypart::pluck('name', 'id');

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($restaurant, FoodtypeStoreRequest $request)
    {
        $foodtype = Foodtype::create($request->all());
        $foodtype->daypart()->associate(Daypart::find($request->get('daypart_id')))->save();

        return redirect()->route('foodtype.index', $restaurant)->with('success', 'Gerecht type aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant, Foodtype $foodtype)
    {
        $view = view('foodtype.show');
        $view->foodtype = $foodtype;

        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($restaurant, Foodtype $foodtype)
    {
        $view = view('foodtype.edit');
        $view->dayparts = Daypart::pluck('name', 'id');
        $view->foodtype = $foodtype;

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($restaurant, FoodtypeStoreRequest $request, Foodtype $foodtype)
    {
        $this->authorize('update', $foodtype);
        $foodtype->update($request->all());
        $daypart = Daypart::find($request->get('id'));
        $foodtype->daypart()->associate($daypart);

        return redirect()->route('foodtype.index', $restaurant)->with('success', 'Gerecht type gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant, Foodtype $foodtype)
    {
        $this->authorize('delete', $foodtype);
        $foodtype->delete();

        return redirect()->route('foodtype.index', $restaurant)->with('success', 'Gerecht type verwijdert');
    }
}
