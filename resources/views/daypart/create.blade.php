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

    @if ($errors->any())
        <div class="alert alert-danger mt-1">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    {{--                    <li> {{'mag niet leeg zijn' }} </li>--}}
                @endforeach
            </ul>
        </div>
    @endif
@endsection

