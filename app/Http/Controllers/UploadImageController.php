<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageStoreRequest;
use App\Models\Photo;


class UploadImageController extends Controller
{
    public function index()
    {
        return view('photo.index');
    }

    public function store(ImageStoreRequest $request)
    {
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');

        $save = new Photo;

        $save->name = $name;
        $save->path = $path;

        $save->save();

        return redirect('photo')->with('status', 'Foto is toegevoegd aan de database');
    }
}
