@extends('layouts.app')

@section('content')
    <h1>Create new Ingredient</h1>

    <div class="create-form form-control">
        {{ Form::open(['route' => ['ingredient.store']]) }}
        {{ Form::label('name', 'Enter ingredient') }}
        {{ Form::text('name', null, ['class' => 'form-control'] ) }}

{{--        {{ Form::select('Measure unit',[--}}
{{--            'Measure unit' => ['gram' => 'gram', 'test', 'test', 'test'],--}}
{{--        ]) }}--}}
{{--        {{ Form::text('gram', null, ['class' => 'form-control'] ) }}--}}

        {{ Form::label('name', 'Enter measure unit') }}
        {{ Form::text('measureunit', null, ['class' => 'form-control'] ) }}
        {{ Form::label('name', 'Enter measurement') }}
        {{ Form::number('measurement', null, ['class' => 'form-control'] ) }}
        {{ Form::submit('Create new ingredient!',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>
@endsection

