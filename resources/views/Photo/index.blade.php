{{--@extends('layouts.app')--}}
{{--@section('content')--}}

{{--    <h1>Voeg afbeelding toe</h1>--}}
{{--    <div class="form-control">--}}

{{--        @if(session('status'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        {{ Form::open(array('route' => 'photo.store', 'enctype' => 'multipart/form-data')) }}--}}
{{--        {{ Form::label('name', 'Upload foto') }}--}}
{{--        {{ Form::file('image') }}--}}
{{--        {{ Form::label('name', 'Selecteer gerecht') }}--}}
{{--        {{ Form::select('name', $dishes) }}--}}
{{--        {{ Form::submit('Indienen!',['class' => 'btn btn-success mt-3']) }}--}}
{{--        {{ Form::close() }}--}}
{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger mt-1">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--@endsection--}}
