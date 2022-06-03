<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $this->authorize('view', $user);
        $view = view('user.index');
        $view->users = User::get();
        $view->roles = Role::get();

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $view = view('user.create');
        $view->roles = Role::pluck('role', 'id');

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($restaurant, Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:255', Rule::unique('users', 'name')],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:6', 'max:255'],
        ]);

        $user = User::create($attributes);
        $role = Role::find($request->get('role_id'));
        $user->role()->associate($role)->save();

        return redirect()->route('user.index', $restaurant)->with('success', 'Gebruiker is aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($restaurant, user $user)
    {
        $view = view('user.edit');
        $view->user = $user;
        $view->roles = Role::pluck('role', 'id');

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($restaurant, Request $request, User $user)
    {
        $user->update($request->all());
        $role = Role::find($request->get('role_id'));
        $user->role()->associate($role)->save();

        return redirect()->route('user.index', $restaurant)->with('success', 'Gebruiker is aangepast');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
