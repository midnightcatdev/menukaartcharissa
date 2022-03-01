@extends('layouts.app')

@section('content')
    <h1>Create new daypart</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['daypart.store']]) }}
        {{ Form::text('name') }}
        {{ Form::submit('Create new day part!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

