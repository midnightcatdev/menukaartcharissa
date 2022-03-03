@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw dagdeel toe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['daypart.store']]) }}
        {{ Form::label('name', 'Voer dagdeel in') }}
        {{ Form::text('name') }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

