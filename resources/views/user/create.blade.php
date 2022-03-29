@extends('layouts.app')

@section('create.user')

    <h1>Create new user</h1>

    <div class="create-user-form form-control" >
        {{ Form::open(['route' => ['user.store']]) }}
        {{ Form::label('name', 'Enter Name') }}
        {{ Form::text('name') }}
        {{ Form::label('email', 'Enter E-mail') }}
        {{ Form::text('email') }}
        {{ Form::label('password', 'Enter password') }}
        {{ Form::text('password') }}
        {{ Form::submit('Create new user!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>

@endsection
