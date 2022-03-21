@extends('layouts.app')
@section('content')
    <h1>Gerechten lijst</h1>
    <table class="table table-hover table-responsive-lg">
        <tr>
            <th class="col-lg-2">Gerecht</th>
            <th class="col-lg-2">Omschrijving</th>
            <th class="col-lg-1">Allergenen</th>
            <th class="col-lg-1">Prijs</th>
            <th class="col-lg-1">Gerecht type</th>
            <th class="col-lg-1">Recepten</th>
            <th class="col-lg-3">Beheer functies</th>
        </tr>
        @foreach($dishes as $dish)
            <tr>
                <td>{{ $dish->name }}</td>
                <td>{{ $dish->description}}</td>
                <td>{{ $dish->allergies }}</td>
                <td>{{ $dish->price }}</td>
                <td>{{ $dish->foodtype->name ?? 'onbekend'}}</td>
                <td>
                    <ul class="list-unstyled list-inline">
                        @foreach($dish->recipes as $recipe)
                            <li>   {{ $recipe->name ?? 'geen recepten gevonden'}}</li>
                        @endforeach
                    </ul>
                </td>

                <td>
                    <div class="d-flex">
                        <a href="{{ route('dish.show', $dish) }}" class="btn btn-secondary m-1" type="edit">Meer
                            info</a>
                        <a href="{{ route('dish.edit', $dish) }}" class="btn btn-success m-1" type="edit">Bewerken</a>
                        {{ Form::open(['route' => ['dish.destroy', $dish], 'method' => 'delete']) }}
                        {{ Form::submit('Verwijderen',['class' => 'btn btn-danger m-1']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('dish.create') }}" class="btn btn-success mt-0 m-2" type="edit">Voeg toe</a>
    <div> {{ $dishes->links() }} </div>
@endsection
