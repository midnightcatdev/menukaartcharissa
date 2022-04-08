@extends('layouts.app')
@section('content')

    <h1> De volgende gerechten verwijderen? </h1>
    <div class="form-control">
        {{ Form::open(['route' => ['dish.multi-select-destroy'], 'method' => 'delete'] )  }}
        <ul>
            @foreach($dishes as $dish)
                <li>
                    {{ Form::label('dishes['.$dish->id.'][name]', 'Naam', $dish->name, ['class' => 'form-label'] ) }}
                    {{ Form::text('dishes['. $dish->id .'][name]', $dish->name, null, ['class' => ''] ) }}
                </li>
            @endforeach
        </ul>
        {{ Form::submit('Ja verwijder', ['class' => 'btn btn-danger']) }}
        <a href="{{ route('dish.index') }}" class="btn btn-secondary m-1 p-2">Nee ga terug</a>
    {{ Form::close() }}
@endsection
