@extends('layouts.app')
@section('content')

    <div class="form-control">
        <h1>Create new user</h1>
        {{ Form::open(['route' => ['user.store']]) }}
        {{ Form::label('name', 'Enter Name', ['class' => 'form-label']) }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('email', 'Enter E-mail', ['class' => 'form-label']) }}
        {{ Form::email('email',  null, ['class' => 'form-control']) }}
        {{ Form::label('password', 'Enter password', ['class' => 'form-label']) }}
        {{ Form::password('password', ['class' => 'form-control']) }}
        {{ Form::label('role_id', 'Selecteer rol', ['class' => 'form-label']) }}
        {{ Form::select('role_id', $roles, null, ['class' => 'form-control']) }}
        {{ Form::submit('Create new user!',['class' => 'btn btn-success mt-2']) }}
        {{ Form::close() }}
    </div>

@endsection
