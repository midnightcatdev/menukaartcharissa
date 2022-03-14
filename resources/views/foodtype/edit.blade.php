@extends('layouts.app')

@section('content')
    <div class="edit-form form-control">
        {{ Form::model($foodtype,['route' => ['foodtype.update', $foodtype], 'method' => 'put']) }}
        {{ Form::label('name','Type gerecht') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('daypart_id', 'Selecteer dagdeel') }}
        {{ Form::select('daypart_id', $dayparts, null, ['class' => 'form-control']) }}
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
