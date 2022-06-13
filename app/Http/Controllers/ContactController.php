<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($restaurant, Contact $contact)
    {
        $view = view('contact.index');
        $view->contact = $contact;

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($restaurant, Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $question = $request->input('question');

        Notification::route('mail', [
            $request->email => $request->name,
        ])->notify(new InvoicePaid());

        return redirect()->route('contact.index', $restaurant)->with('success', 'Uw vraag is verzonden');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant, Contact $contact)
    {
        $view = view('contact.show');
        $view->contact = $contact;

        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
