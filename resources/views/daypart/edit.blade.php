@extends('layouts.app')

@section('content')
    <div class="edit-form form-control">
        {{ Form::model($daypart,['route' => ['daypart.update', $daypart], 'method' => 'put']) }}
        {{ Form::label('Name', 'Dagdeel' ) }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
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
