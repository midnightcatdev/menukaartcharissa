@extends('layouts.app')

@section('content')
    <div class="edit-form control-form">
        {{ Form::model($foodtype,['route' => ['foodtype.update', $foodtype], 'method' => 'put']) }}
        {{ Form::label('Current value') }}
        {{ Form::text('name') }}
        {{ Form::submit('Edit!',['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection
