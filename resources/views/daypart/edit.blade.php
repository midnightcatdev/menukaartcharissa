@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Bewerk dagdeel</h2>
        {{ Form::model($daypart, ['route' => ['daypart.update', 'restaurant' => $restaurant->name, 'daypart' => $daypart], 'method' => 'put' ]) }}
        {{ Form::label('Name', 'Dagdeel', ['class' => 'form-label'] ) }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('daypart.index', [request()->restaurant]) }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection
