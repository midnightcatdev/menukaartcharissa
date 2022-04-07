@extends('layouts.app');
@section('content')

    <h1> Edit these dishes? </h1>
    <div class="form-control">
        {{ Form::model($dishes,['route' => ['dish.multi-update'], 'enctype' => 'multipart/form-data', 'method' => 'put']) }}
        @foreach($dishes as $dish)
            <h3>{{$dish->name}}</h3>
            {{ Form::label('dishes['.$dish->id.'][price]', 'Prijs', $dish->name, ['class' => 'form-label'] ) }}
            {{ Form::number('dishes['. $dish->id .'][price]', $dish->price, null, ['class' => 'form-control'] ) }}

            {{ Form::label('dishes['.$dish->id.'][name]', 'Naam', $dish->name, ['class' => 'form-label'] ) }}
            {{ Form::text('dishes['. $dish->id .'][name]', $dish->name, null, ['class' => 'form-control'] ) }}
        @endforeach
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>

    {{--    <div class="form-control">--}}
    {{--        {{ Form::model($dishes,['route' => ['dish.multi-edit'], 'enctype' => 'multipart/form-data', 'method' => 'put']) }}--}}
    {{--        @foreach($dishes as $dish)--}}
    {{--            <h3>{{$dish->name}}</h3>--}}
    {{--            {{ Form::label('dishes['.$dish->id.'][price]', 'Prijs', $dish->name, ['class' => 'form-label'] ) }}--}}
    {{--            {{ Form::number('dishes['. $dish->id .'][price]', $dish->price, null, ['class' => 'form-control'] ) }}--}}

    {{--            {{ Form::label('dishes['.$dish->id.'][name]', 'Naam', $dish->name, ['class' => 'form-label'] ) }}--}}
    {{--            {{ Form::text('dishes['. $dish->id .'][name]', $dish->name, null, ['class' => 'form-control'] ) }}--}}
    {{--        @endforeach--}}
    {{--        {{ Form::submit('Verhoog met 9% BTW',['class' => 'btn btn-success mt-3']) }}--}}
    {{--        {{ Form::close() }}--}}
    {{--    </div>--}}

    @if ($errors->any())
        <div class="alert alert-danger mt-1">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
