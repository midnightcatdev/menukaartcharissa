@extends('layouts.app')

@section('content')
    <div class="edit-form form-control">
        {{ Form::model($ingredient,['route' => ['ingredient.update', $ingredient], 'method' => 'put']) }}
        {{ Form::label('name', 'Ingredient') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('unit', 'Meeteenheid') }}
        {{ Form::text('unit',  null, ['class' => 'form-control']) }}
        {{ Form::label('measurement', 'Waarde') }}
        {{ Form::text('measurement',  null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

