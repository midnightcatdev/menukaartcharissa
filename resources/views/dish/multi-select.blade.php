@extends('layouts.app')
@section('content')

    <div class="form-control">
        <h2> De volgende gerechten verwijderen? </h2>
        {{ Form::open(['route' => ['dish.multi-select-destroy'], 'method' => 'delete'] )  }}
        <ul>
            @foreach($dishes as $dish)
                <li>
                    {{ Form::label('dishes['.$dish->id.'][name]', 'Naam', $dish->name, ['class' => 'form-label'] ) }}
                    {{ Form::text('dishes['. $dish->id .'][name]', $dish->name, null, ['class' => ''] ) }}
                </li>
            @endforeach
        </ul>
        {{ Form::submit('Ja verwijder', ['class' => 'btn btn-danger m-1 p-2']) }}
        <a href="{{ route('dish.index') }}" class="btn btn-secondary m-1 p-2">Nee ga terug</a>
    {{ Form::close() }}
@endsection
