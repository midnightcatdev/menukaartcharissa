@extends('layouts.app')

@section('content')
    <div class="edit-form form-control">
        {{ Form::model($dish,['route' => ['dish.update', $dish], 'method' => 'put']) }}
        {{ Form::label('name', 'Naam')}}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('description', 'Omschrijving') }}
        {{ Form::text('description',  null, ['class' => 'form-control'] ) }}
        {{ Form::label('allergies', 'Allergenen') }}
        {{ Form::text('allergies',  null, ['class' => 'form-control'] ) }}
        {{ Form::label('price', 'Prijs') }}
        {{ Form::number('price',  null, ['class' => 'form-control'] ) }}
        {{--        {{ Form::label('foodtype_id', 'Type gerecht') }}--}}
        {{--        {{ Form::select('foodtype_id', $dish, null, ['class' => 'form-control']) }}--}}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection
