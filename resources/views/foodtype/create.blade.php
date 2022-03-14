@extends('layouts.app')

@section('content')
    <h1>Voeg nieuw type gerecht toe</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['foodtype.store']]) }}
        {{ Form::label('name', 'Voer type gerecht in') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::label('daypart_id', 'Selecteer dagdeel') }}
        {{ Form::select('daypart_id', $dayparts, null, ['class' => 'form-control']) }}
        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}
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
