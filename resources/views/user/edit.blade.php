@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h3>Bewerk gebruikers rechten</h3>
        {{--        {{ Form::model($user,['route' => ['user.update', $user], 'method' => 'put']) }}--}}

        {{ Form::model($user, ['route' => ['user.update', 'restaurant' => $restaurant->name, 'user' => $user], 'method' => 'put' ]) }}
        {{--        {{ Form::model($user, array('route' => array('user.update', 'restaurant' => $restaurant->name, 'user' => $user), 'method' => 'put' )) }}--}}
        {{ Form::label('name','Gebruikers naam', ['class' => 'form-label']) }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('role_id', 'Selecteer rol', ['class' => 'form-label']) }}
        {{ Form::select('role_id', $roles, null, ['class' => 'form-control']) }}
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('user.index', $restaurant) }}" class="btn btn-secondary mt-3">Terug naar gebruikers lijst</a>
        {{ Form::close() }}
    </div

@endsection
