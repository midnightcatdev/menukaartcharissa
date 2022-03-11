@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-body">
            <div class="row">
                <h1 class="card-title">{{ $dish->name }}</h1>
                <div class="col-4">
                    <h3 class="card-subtitle mt-2">Euro:</h3>
                    <h5>€ {{ $dish->price }}</h5>
                    <h3 class="card-subtitle mt-2">Omschrijving:</h3>
                    <p class="card-text"> {{ $dish->description }} </p>
                    <h3 class="card-subtitle">Allergenen:</h3>
                    <p> {{ $dish->allergies }} </p>
                    <h3 class="card-subtitle">Bereidingswijze:</h3>
                    @foreach($dish->recipes as $recipe)
                        {{ $recipe->name }} <br>
                        <p>{{ $recipe->steps }}</p>
                        <h3 class="card-subtitle">Ingredienten:</h3>
                        <ul class="list-unstyled list-inline">
                            @foreach($recipe->ingredients as $ingredient)
                                <li>  {{$ingredient->name}} </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="col-8">
                    <div class="text-center">
                        <img
                            src="{{ asset('images/Pannenkoek.avif') }}" alt='Pannenkoek Afbeelding'
                            class="text-center w-50">
                    </div>
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
