@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="create-form form-control">
        <h2>Nieuw gerecht type</h2>
        {{ Form::open(['route' => ['foodtype.store']]) }}
        {{ Form::label('name', 'Voer type gerecht in') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('daypart_id', 'Selecteer dagdeel') }}
        {{ Form::select('daypart_id', $dayparts, null, ['class' => 'form-control']) }}
        {{ Form::submit('Indienen',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index') }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

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
