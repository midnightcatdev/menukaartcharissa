<?php

namespace App\Http\Controllers;

use App\Models\Daypart;
use Illuminate\Http\Request;
use URL;

class DaypartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

// controller communiceert met de view en geeft data mee
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
    public function create()
    {
        return view('daypart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Daypart::create([
            'name' => $request->get('name'),
        ]);

        return redirect()->route('daypart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Daypart $daypart)
    {
        return view('daypart.show', compact('daypart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Daypart $daypart)
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
    public function update(Request $request, Daypart $daypart)
    {
        $daypart->update($request->all());

        return redirect()->route('daypart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Daypart $daypart)
    {
        $daypart->delete();
        return redirect()->route('daypart.index')
            ->with('success', 'Daypart updated successfully');
    }
}
