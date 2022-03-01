@extends('layouts.app')

@section('content')
    <div class="edit-form control-form">
        {{ Form::model($recipe,['route' => ['recipe.update', $recipe], 'method' => 'put']) }}
        {{ Form::label('name', 'Current name') }}
        {{ Form::text('name') }}
        {{ Form::submit('Submit changes!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

