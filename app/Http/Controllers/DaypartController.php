<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaypartStoreRequest;
use App\Models\Daypart;
use App\Models\Restaurant;

class DaypartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($restaurant)
    {
        $view = view('daypart.index');
        $view->dayparts = Restaurant::getCurrentRestaurant()->dayparts;
//        $view->dayparts = Daypart::get();

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurant, Daypart $daypart)
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
    public function store($restaurant, DaypartStoreRequest $request)
    {
        Daypart::create([
            'name' => $request->get('name'),
        ]);

        return redirect()->route('daypart.index', $restaurant)->with('success', 'Dagdeel is aangemaakt');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant, Daypart $daypart)
    {
        $view = view('daypart.show');
        $view->daypart = $daypart;

        return $view;
    }

    public function menu($restaurant)
    {
        $view = view('daypart.menukaart');
        $view->dayparts = Restaurant::getCurrentRestaurant()->dayparts;

        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($restaurant, Daypart $daypart)
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
    public function update($restaurant, DaypartStoreRequest $request, Daypart $daypart)
    {
        $this->authorize('update', $daypart);
        $daypart->update($request->all());

        return redirect()->route('daypart.index', $restaurant)->with('success', 'Dagdeel gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($restaurant, Daypart $daypart)
    {
        $this->authorize('destroy', $daypart);
        $daypart->delete();

        return redirect()->route('daypart.index')->with('success', 'Dagdeel verwijdert');
    }
}
