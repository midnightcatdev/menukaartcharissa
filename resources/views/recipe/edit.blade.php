@extends('layouts.header')
@extends('layouts.create')
@section('content')

    <div class="form-control">
        <h2>Bewerk recept</h2>

        {{ Form::model($recipe, array('route' => array('recipe.update', 'restaurant' => $restaurant->name, 'recipe' => $recipe), 'method' => 'put' )) }}
        {{ Form::label('name', 'Recept naam') }}
        {{ Form::text('name',  null, ['class' => 'form-control']) }}
        {{ Form::label('steps', 'Bereidingswijze') }}
        {{ Form::text('steps', null, ['class' => 'form-control'] ) }}
        {{ Form::label('dish_id', 'Gerecht naam') }}
        {{ Form::select('dish_id', $dishes, null, ['class' => 'form-control']) }}
        {{ Form::label('Selecteer ingredienten', null, ['class' => 'mt-3'] ) }}
        @foreach($ingredients as $id => $ingredient_name)
            <div class="form-check mt-0 pt-0">
                {{ Form::label('ingredients', $ingredient_name, null, ['class' => 'form-check-label'] ) }}
                {{ Form::checkbox('ingredients[]', $id, null, ['class' => 'form-check-input'] ) }}
            </div>
        @endforeach
        {{ Form::submit('Opslaan',['class' => 'btn btn-success mt-3']) }}
        <a href="{{ route('dish.index', $restaurant) }}" class="btn btn-secondary mt-3">Terug</a>
        {{ Form::close() }}
    </div>

@endsection

