@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="create-form form-control">
        <h2>Nieuw ingredient</h2>
        {{ Form::open(['route' => ['ingredient.store', $restaurant->name]]) }}
        {{ Form::label('name', 'Voer ingredient naam in') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('unit', 'Voer meeteenheid in') }}
        {{ Form::text('unit', null, ['class' => 'form-control'] ) }}
        {{ Form::label('value', 'Voer waarde in') }}
        {{ Form::number('value', null, ['class' => 'form-control'] ) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index', $restaurant) }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection

