@extends('layouts.app')
@section('content')
    <h1>Gerechten lijst</h1>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Gerecht</th>
            <th>Omschrijving</th>
            <th>Allergenen</th>
            <th>Prijs</th>
            <th>Gerecht type</th>
            <th>Recepten</th>
            <th>Beheer functies</th>
        </tr>
        @foreach($dishes as $dish)
            <ul>
                <td>{{ $dish->name }}</td>
                <td>{{ $dish->description}}</td>
                <td>{{ $dish->allergies }}</td>
                <td>{{ $dish->price }}</td>
                <td> {{ $dish->foodtype->name ?? 'onbekend'}}</td>
                <td>
                    <ul class="list-unstyled list-inline">
                        @foreach($dish->recipes as $recipe)
                            <li>   {{ $recipe->name ?? 'geen recepten gevonden'}}</li>
                    @endforeach
                </td>
            </ul>
            <td class="d-flex">
                <div class="edit-button me-1">
                    <a href="{{ route('dish.show', $dish) }}" class="btn btn-secondary" type="edit">Meer
                        info</a>
                    <a href="{{ route('dish.edit', $dish) }}" class="btn btn-success" type="edit">Bewerken</a>
                </div>
                <div class="delete-button">
                    {{ Form::open(['route' => ['dish.destroy', $dish], 'method' => 'delete']) }}
                    {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </div>
            </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('dish.create') }}" class="btn btn-success mt-0 m-2" type="edit">Voeg toe</a>
    <div> {{ $dishes->links() }} </div>
@endsection
