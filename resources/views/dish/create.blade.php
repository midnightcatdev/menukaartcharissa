@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw gerecht toe</h1>
    <div class="form-control">
        {{ Form::open(['route' => ['dish.store']]) }}
        {{ Form::label('name', 'Enter dish name') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('description', 'Enter description') }}
        {{ Form::text('description', null, ['class' => 'form-control'] ) }}
        {{ Form::label('allergies', 'Allergenen') }}
        {{ Form::text('allergies', null, ['class' => 'form-control'] ) }}
        {{ Form::label('price', 'Voer prijs in') }}
        {{ Form::number('price', 'prijs', ['class' => 'form-control'] ) }}

        {{ Form::label('foodtype_id', 'Gerecht type') }}
        {{ Form::select('foodtype_id', $foodtypes, null, ['class' => 'form-control']) }}

        {{--        waarom werkt dit niet--}}
        {{--        {{ Form::label('foodtype_id', 'Gerecht type') }}--}}
        {{--        @foreach($foodtypes as $id => $foodtype_name)--}}
        {{--            <div class="form-check mt-0 pt-0">--}}
        {{--                {{ Form::label('foodtype_id', $foodtype_name, null, ['class' => 'form-check-label'] ) }}--}}
        {{--                {{ Form::checkbox('foodtypes[]', $id, null, ['class' => 'form-check-input'] ) }}--}}
        {{--            </div>--}}
        {{--        @endforeach--}}

        {{ Form::label('recipes', 'Selecteer recept') }}
        @foreach($recipes as $id => $recipe_name)
            <div class="form-check mt-0 pt-0">
                {{ Form::label('recipes', $recipe_name, null, ['class' => 'form-check-label'] ) }}
                {{ Form::checkbox('recipes[]', $id, null, ['class' => 'form-check-input'] ) }}
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
