@extends('layouts.app')
@section('content')

    <div class="form-control">
        <h2> Edit these dishes? </h2>
        {{ Form::model($dishes,['route' => ['dish.multi-update'], 'enctype' => 'multipart/form-data', 'method' => 'put']) }}
        @foreach($dishes as $dish)
            <h4>{{$dish->name}}</h4>
            {{ Form::label('dishes['.$dish->id.'][price]', 'Prijs', $dish->name, ['class' => 'form-label'] ) }}
            {{ Form::number('dishes['. $dish->id .'][price]', $dish->price, null, ['class' => ''] ) }}

            {{ Form::label('dishes['.$dish->id.'][name]', 'Naam', $dish->name, ['class' => 'form-label'] ) }}
            {{ Form::text('dishes['. $dish->id .'][name]', $dish->name, null, ['class' => ''] ) }}
        @endforeach
        <div>
            <button class="btn btn-primary mt-3" type="submit" formaction="multi-update-btw">verhoog
                met 9 procent
            </button>
            <button class="btn btn-success mt-3" type="submit">opslaan</button>
            <a href="{{ route('dish.index') }}" class="btn btn-secondary mt-3">Ga terug</a>
        </div>
        {{ Form::close() }}
    </div>

@endsection
