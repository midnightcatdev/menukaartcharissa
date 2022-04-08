@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Nieuw gerecht</h2>
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
        <ul class="list-group list-unstyled m-1 p-1">
            {{ Form::label('recipes', 'Selecteer recept:', ['class' => 'form-label'] ) }}
            @foreach($recipes as $id => $recipe_name)
                <li>
                    {{ Form::label('recipes', $recipe_name, null, ['class' => 'form-check-label'] ) }}
                    {{ Form::checkbox('recipes[]', $id, null, ['class' => 'form-check-input'] ) }}
                </li>
            @endforeach
        </ul>
        {{ Form::label('photo_name', 'Upload foto:', ['class' => 'form-label'] ) }}
        {{ Form::file('photo_name', ['class' => 'form-control'] ) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index') }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection
