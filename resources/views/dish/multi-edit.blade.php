@extends('layouts.app');
@section('content')

    <h1> Edit these dishes? </h1>
    <div class="form-control">
        {{ Form::model($dishes,['route' => ['dish.multi-update'], 'enctype' => 'multipart/form-data', 'method' => 'put']) }}
        @foreach($dishes as $dish)
            <h3>{{$dish->name}}</h3>
            {{ Form::label('dishes['.$dish->id.'][price]', 'Prijs', $dish->name, ['class' => 'form-label'] ) }}
            {{ Form::number('dishes['. $dish->id .'][price]', $dish->price, null, ['class' => ''] ) }}

            {{ Form::label('dishes['.$dish->id.'][name]', 'Naam', $dish->name, ['class' => 'form-label'] ) }}
            {{ Form::text('dishes['. $dish->id .'][name]', $dish->name, null, ['class' => ''] ) }}
        @endforeach
        <div>
            <button class="btn btn-secondary mt-3" type="submit" formaction="multi-update-btw">verhoog
                met 9 procent
            </button>
            <button class="btn btn-success mt-3" type="submit">opslaan</button>
        </div>

        {{ Form::close() }}
    </div>

@endsection
