@extends('layouts.app')

@section('content')
    <h1>Create new Recipe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['recipe.store']]) }}
        {{ Form::label('name', 'Enter recipe name') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('name', 'Bereidingswijze') }}
        {{ Form::text('steps', null, ['class' => 'form-control'] ) }}

        {{ Form::label('name', 'ingredienten') }}
        {{ Form::checkbox('name') }}

        {{ Form::submit('Create new recipe!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

