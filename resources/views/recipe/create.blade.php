@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw recept toe</h1>
    <div class="create-form form-control">
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
        {{ Form::close() }}
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

