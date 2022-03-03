@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw recept toe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['recipe.store']]) }}
        {{ Form::label('name', 'Naam recept') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('steps', 'Bereidingswijze') }}
        {{ Form::text('steps', null, ['class' => 'form-control'] ) }}

        {{--        {{ Form::label('name', 'ingredienten') }}--}}
        {{--        {{ Form::checkbox('name') }}--}}
        {{--        {{ Form::label('name', 'ingredienten') }}--}}
        {{--        {{ Form::checkbox('name') }}--}}

        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

