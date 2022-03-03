@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw gerecht toe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['dish.store']]) }}
        {{ Form::label('name', 'Enter dish name') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('description', 'Enter description') }}
        {{ Form::text('description', null, ['class' => 'form-control'] ) }}
        {{ Form::label('allergies', 'Allergenen') }}
        {{ Form::text('allergies', null, ['class' => 'form-control'] ) }}
        {{ Form::label('price', 'Voer prijs in') }}
        {{ Form::number('price', 'prijs', ['class' => 'form-control'] ) }}
        {{ Form::label('foodtype_id', 'Select foodtype') }}
        {{ Form::select('foodtype_id', $foodtypes, null, ['class' => 'form-control']) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection
