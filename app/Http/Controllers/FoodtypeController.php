<?php

namespace App\Http\Controllers;

use App\Models\Daypart;
use App\Models\Foodtype;
use Illuminate\Http\Request;

class FoodtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = view('foodtype.index');
        $view->foodtypes = Foodtype::get();

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function store(Request $request)
    {
        $foodtype = Foodtype::create($request->all());
        $foodtype->daypart()->associate(Daypart::find($request->get('daypart_id')))->save();

        return redirect()->route('foodtype.index')->with('success', 'Gerecht type toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Foodtype $foodtype)
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
    public function edit(Foodtype $foodtype)
    {
        $view = view('foodtype.edit');

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
    public function update(Request $request, Foodtype $foodtype)
    {
        $foodtype->update($request->all());

        return redirect()->route('foodtype.index')->with('success', 'Aanpassing verwerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foodtype $foodtype)
    {
        $foodtype->delete();
        return redirect()->route('foodtype.index')->with('success', 'Gerecht type verwijdert');
    }
}
