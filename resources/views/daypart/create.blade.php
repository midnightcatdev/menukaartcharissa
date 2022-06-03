@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Nieuw dagdeel:</h2>
        {{ Form::open(['route' => ['daypart.store', $restaurant->name]]) }}
        {{ Form::label('name', 'Voer dagdeel in', ['class' => 'form-label'] ) }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('daypart.index', $restaurant) }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection

