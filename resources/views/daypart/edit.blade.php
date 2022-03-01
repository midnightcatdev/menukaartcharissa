@extends('layouts.app')

@section('content')
    <div class="edit-form control-form">
        {{ Form::model($daypart,['route' => ['daypart.update', $daypart], 'method' => 'put']) }}
        {{ Form::label('Current value') }}
        {{ Form::text('name') }}
        {{ Form::submit('Edit!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

