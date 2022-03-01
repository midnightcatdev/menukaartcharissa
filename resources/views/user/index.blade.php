@extends('layouts.app')

<h1>user</h1>

<a href="{{ route('user.create') }}" class="btn btn-success" type="edit">Create new user</a>

@foreach ($users as $user)

    <h1> {{ $user->name }} </h1>
    <h2> {{ $user->email }} </h2>
    <div class="delete-user-button">
        {{ Form::open(['route' => ['user.destroy', $user], 'method' => 'delete']) }}
        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>

@endforeach
