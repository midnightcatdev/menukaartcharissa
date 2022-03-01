@extends('layouts.app')

@section('content')
    <div class="edit-form control-form">
        {{ Form::model($ingredient,['route' => ['ingredient.update', $ingredient], 'method' => 'put']) }}
        {{ Form::label('name', 'Current name') }}
        {{ Form::text('name') }}
        {{ Form::label('name', 'Current') }}
        {{ Form::text('measureunit') }}
        {{ Form::label('name', 'Current') }}
        {{ Form::text('measurement') }}
        {{ Form::submit('Submit changes!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

