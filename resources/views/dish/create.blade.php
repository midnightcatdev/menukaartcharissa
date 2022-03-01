@extends('layouts.app')

@section('content')
    <h1>Create new Dish</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['dish.store']]) }}
        {{ Form::label('name', 'Enter dish name') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('name', 'Enter description') }}
        {{ Form::text('description', null, ['class' => 'form-control'] ) }}
        {{ Form::label('name', 'Allergenen') }}
        {{ Form::text('allergies', null, ['class' => 'form-control'] ) }}
        {{ Form::label('prijs', 'Enter prijs') }}
        {{ Form::number('prijs', 'prijs', ['class' => 'form-control'] ) }}
        {{ Form::label('name', 'Select foodtype') }}
        {{ Form::select('foodtype_id', $foodtypes, null, ['class' => 'form-control']) }}
{{--        {{ Form::label('name', 'Select recipe') }}--}}
{{--        {{ Form::select('ingredient_recipe_id', $recipes, null, ['class' => 'form-control']) }}--}}
        {{ Form::submit('Create new dish!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection
