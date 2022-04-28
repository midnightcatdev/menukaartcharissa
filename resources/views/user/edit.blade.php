@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Bewerk gebruikers rechten</h2>
        {{ Form::model($user,['route' => ['user.update', $user], 'method' => 'put']) }}
        {{ Form::label('name','Gebruikers naam') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('role_id', 'Selecteer rol') }}
        {{ Form::select('role_id', $roles, null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('user.index') }}" class="btn btn-secondary mt-3">Terug naar gebruikers lijst</a>
        {{ Form::close() }}
    </div

@endsection
