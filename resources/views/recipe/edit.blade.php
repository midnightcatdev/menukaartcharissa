@extends('layouts.app')

@section('content')
    <div class="edit-form form-control">
        {{ Form::model($recipe,['route' => ['recipe.update', $recipe], 'method' => 'put']) }}
        {{ Form::label('name', 'Recept naam') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('steps', 'Bereidingswijze') }}
        {{ Form::text('steps', null, ['class' => 'form-control'] ) }}
        {{ Form::label('Selecteer ingredienten', null, ['class' => 'mt-3'] ) }}
        @foreach($ingredients as $id => $ingredient_name)
            <div class="form-check mt-0 pt-0">
                {{ Form::label('ingredients', $ingredient_name, null, ['class' => 'form-check-label'] ) }}
                {{ Form::checkbox('ingredients[]', $id, null, ['class' => 'form-check-input'] ) }}
            </div>
        @endforeach
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        {{ Form::close() }}
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-1">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

