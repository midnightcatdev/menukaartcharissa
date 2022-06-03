@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Bewerk gerecht type</h2>


        {{ Form::model($foodtype, array('route' => array('foodtype.update', 'restaurant' => $restaurant->name, 'foodtype' => $foodtype), 'method' => 'put' )) }}
        {{ Form::label('name','Type gerecht') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('daypart_id', 'Selecteer dagdeel') }}
        {{ Form::select('daypart_id', $dayparts, null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index', $restaurant) }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection
