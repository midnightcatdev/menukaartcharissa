@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-body">
            <div class="row">
                <h1 class="card-title">{{ $dish->name }}</h1>

                @foreach($dish->recipes as $recipe)
                    Recept:{{ $recipe->name}}<br/>
                    Ingredienten:
                    @foreach($recipe->ingredients as $ingredient)
                        {{$ingredient->name}},
                    @endforeach
                @endforeach

                <div class="col-6">
                    <h5>€ {{ $dish->price }}</h5>
                    <h3 class="card-subtitle mt-2">Omschrijving</h3>
                    <p class="card-text"> {{ $dish->description }} </p>
                    <h3 class="card-subtitle">Allergenen</h3>
                    <p> {{ $dish->allergies }} </p>
                    <h3 class="card-subtitle">Ingredienten</h3>
                    <p>placeholder ingredient text</p>
                    <h3 class="card-subtitle">Bereidingswijze</h3>
                    <p>placeholder Bereidingswijze text</p>
                </div>
                <div class="col-6">
                    <div class="text-center"><img
                            src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=780&q=80"
                            alt='Pannenkoek Afbeelding' class="w-50 h-50"></div>
                </div>
                <div class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('dish.edit', $dish) }}" class="btn btn-success" type="edit">Bewerken</a>
                    </div>
                    <div class="delete-button me-1">
                        {{ Form::open(['route' => ['dish.destroy', $dish], 'method' => 'delete']) }}
                        {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                    <div class="back-button">
                        <a href="{{ route('dish.index', $dish) }}" class="btn btn-info text-white" type="edit">Gerechten
                            overzicht</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
