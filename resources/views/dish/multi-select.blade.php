@extends('layouts.app')
@section('content')

    <div class="form-control">
        <h2> De volgende gerechten verwijderen? </h2>
        {{ Form::open(['route' => ['dish.multi-select-destroy', $restaurant->name], 'enctype' => 'multipart/form-data', 'method' => 'delete']) }}
        <ul>
            @foreach($dishes as $dish)
                {{ $dish->name }}
                {{ Form::checkbox('dishes[]', $dish->id, true, ['class' => 'd-none']) }}
            @endforeach
        </ul>
        {{ Form::submit('Ja verwijder', ['class' => 'btn btn-danger m-1 p-2']) }}
        <a href="{{ route('dish.index', $restaurant->name) }}" class="btn btn-secondary m-1 p-2">Nee ga terug</a>
    {{ Form::close() }}

@endsection
