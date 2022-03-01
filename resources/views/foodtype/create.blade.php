@extends('layouts.app')

@section('content')
    <h1>Create new foodtype</h1>
    <div class="create-form form-control">
        {{ Form::open(['route' => ['foodtype.store']]) }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}
        {{ Form::select('daypart_id', $dayparts, null, ['class' => 'form-control mt-3']) }}
        {{ Form::submit('Create new foodtype!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

