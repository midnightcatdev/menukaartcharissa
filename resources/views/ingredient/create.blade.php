@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw ingredient toe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['ingredient.store']]) }}
        {{ Form::label('name', 'Enter ingredient') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('unit', 'Enter measure Unit') }}
        {{ Form::text('unit', null, ['class' => 'form-control'] ) }}
        {{ Form::label('measurement', 'Enter measurement') }}
        {{ Form::number('measurement', null, ['class' => 'form-control'] ) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

