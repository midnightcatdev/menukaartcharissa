@extends('layouts.app')

@section('content')
    <div class="edit-form form-control">
        {{ Form::model($recipe,['route' => ['recipe.update', $recipe], 'method' => 'put']) }}
        {{ Form::label('name', 'Current name') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

