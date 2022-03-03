@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw recept toe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['foodtype.store']]) }}
        {{ Form::label('name', 'Voer type gerecht in') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('daypart_id', 'Selecteer dagdeel') }}
        {{ Form::select('daypart_id', $dayparts, null, ['class' => 'form-control']) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection
