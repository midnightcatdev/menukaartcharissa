@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Bewerk gerecht</h2>
        {{ Form::model($dish,['route' => ['dish.update', $dish], 'enctype' => 'multipart/form-data', 'method' => 'put']) }}
        {{ Form::label('name', 'Naam', ['class' => 'form-label'] ) }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('description', 'Omschrijving', ['class' => 'form-label'] ) }}
        {{ Form::text('description',  null, ['class' => 'form-control'] ) }}
        {{ Form::label('allergies', 'Allergenen', ['class' => 'form-label'] ) }}
        {{ Form::text('allergies',  null, ['class' => 'form-control'] ) }}
        {{ Form::label('price', 'Prijs', ['class' => 'form-label'] ) }}
        {{ Form::number('price',  null, ['class' => 'form-control'] ) }}
        {{ Form::label('foodtype_id', 'Selecteer gerecht type', ['class' => 'form-label'] ) }}
        {{ Form::select('foodtype_id', $foodtypes, null, ['class' => 'form-control']) }}
        {{ Form::label('recipes', 'Selecteer recept', ['class' => 'form-label'] ) }}
        @foreach($recipes as $id => $recipe_name)
            <div class="form-check mt-0 pt-0">
                {{ Form::label('recipes', $recipe_name, null, ['class' => 'form-check-label'] ) }}
                {{ Form::checkbox('recipes[]', $id, null, ['class' => 'form-check-input'] ) }}
            </div>
        @endforeach
        {{ Form::label('photo_name', 'Upload foto', ['class' => 'form-label'] ) }}
        {{ Form::file('photo_name', ['class' => 'form-control'] ) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index') }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection
