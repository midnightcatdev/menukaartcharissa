@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw gerecht toe</h1>
    <div class="form-control w-50">
        <div class="row align-items-center">
            {{ Form::open(array('route' => 'dish.store', 'enctype' => 'multipart/form-data')) }}
            {{ Form::label('name', 'Voer gerecht naam in:', ['class' => 'form-label'] ) }}
            {{ Form::text('name', null, ['class' => 'form-control'] ) }}
            {{ Form::label('description', 'Omschrijving:', ['class' => 'form-label'] ) }}
            {{ Form::text('description', null, ['class' => 'form-control'] ) }}
            {{ Form::label('allergies', 'Allergenen:', ['class' => 'form-label'] ) }}
            {{ Form::text('allergies', null, ['class' => 'form-control'] ) }}
            {{ Form::label('price', 'Voer prijs in:', ['class' => 'form-label'] ) }}
            {{ Form::number('price', 'prijs', ['class' => 'form-control'] ) }}
            {{ Form::label('foodtype_id', 'Gerecht type:', ['class' => 'form-label'] ) }}
            {{ Form::select('foodtype_id', $foodtypes, null, ['class' => 'form-select']) }}
            {{ Form::label('recipes', 'Selecteer recept:', ['class' => 'form-label'] ) }}
            @foreach($recipes as $id => $recipe_name)
                <div class="form-check mt-0 pt-0">
                    {{ Form::label('recipes', $recipe_name, null, ['class' => 'form-check-label'] ) }}
                    {{ Form::checkbox('recipes[]', $id, null, ['class' => 'form-check-input'] ) }}
                </div>
            @endforeach
            {{ Form::label('photo_name', 'Upload foto:', ['class' => 'form-label'] ) }}
            {{ Form::file('photo_name', ['class' => 'form-control'] ) }}
            {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
            {{ Form::close() }}
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-1">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
