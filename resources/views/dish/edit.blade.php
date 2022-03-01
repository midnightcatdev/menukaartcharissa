@extends('layouts.app')

@section('content')

    <div class="edit-form control-form">
        {{ Form::model($dish,['route' => ['dish.update', $dish], 'method' => 'put']) }}
        {{ Form::label('Current value') }}
        {{ Form::text('name') }}
        {{ Form::label('Current value') }}
        {{ Form::text('description') }}
        {{ Form::label('Current value') }}
        {{ Form::text('allergies') }}
        {{ Form::label('Current value') }}
        {{ Form::number('prijs') }}
        {{ Form::submit('Edit!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection
