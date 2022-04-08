@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Bewerk ingredient</h2>
        {{ Form::model($ingredient,['route' => ['ingredient.update', $ingredient], 'method' => 'put']) }}
        {{ Form::label('name', 'Ingredient') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('unit', 'Meeteenheid') }}
        {{ Form::text('unit',  null, ['class' => 'form-control']) }}
        {{ Form::label('value', 'Waarde') }}
        {{ Form::text('value',  null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index') }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection

