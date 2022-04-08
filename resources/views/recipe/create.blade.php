@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Nieuw recept</h2>
        {{ Form::open(['route' => ['recipe.store']]) }}
        {{ Form::label('name', 'Naam recept') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('steps', 'Bereidingswijze') }}
        {{ Form::text('steps', null, ['class' => 'form-control'] ) }}
        {{ Form::label('ingredients', 'Ingredient naam') }}
        @foreach($ingredients as $id => $ingredient_name)
            <div class="form-check mt-0 pt-0">
                {{ Form::label('ingredients', $ingredient_name, null, ['class' => 'form-check-label'] ) }}
                {{ Form::checkbox('ingredients[]', $id, null, ['class' => 'form-check-input'] ) }}
            </div>
        @endforeach
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index') }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection

