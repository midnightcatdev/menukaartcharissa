<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaypartStoreRequest;
use App\Models\Daypart;
use App\Models\Dish;
use App\Models\Foodtype;
use App\Models\Recipe;

class DaypartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $view = view('daypart.index');
        $view->dayparts = Daypart::get();

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Daypart $daypart)
    {
        $this->authorize('create', $daypart);

        return view('daypart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DaypartStoreRequest $request)
    {
        Daypart::create([
            'name' => $request->get('name'),
        ]);

        return redirect()->route('daypart.index')->with('success', 'Dagdeel is aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Daypart $daypart)
    {
        $view = view('daypart.show');

        $view->daypart = $daypart;

        return $view;
    }

    public function menu()
    {
        $view = view('daypart.menukaart');
        $view->dayparts = Daypart::get();
        $view->recipes = Recipe::get();
        $view->dishes = Dish::get();
        $view->foodtypes = Foodtype::get();

        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Daypart $daypart)
    {
        $view = view('daypart.edit');

        $view->daypart = $daypart;

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DaypartStoreRequest $request, Daypart $daypart)
    {
        $this->authorize('update', $daypart);
        $daypart->update($request->all());

        return redirect()->route('daypart.index')->with('success', 'Dagdeel gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Daypart $daypart)
    {
        $this->authorize('destroy', $daypart);
        $daypart->delete();

        return redirect()->route('daypart.index')->with('success', 'Dagdeel verwijdert');
    }
}
