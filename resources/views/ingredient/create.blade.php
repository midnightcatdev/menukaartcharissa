@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw ingredient toe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['ingredient.store']]) }}
        {{ Form::label('name', 'Voer ingredient naam in') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('unit', 'Voer meeteenheid in') }}
        {{ Form::text('unit', null, ['class' => 'form-control'] ) }}
        {{ Form::label('value', 'Voer waarde in') }}
        {{ Form::number('value', null, ['class' => 'form-control'] ) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

