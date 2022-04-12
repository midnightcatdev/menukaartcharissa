@extends('layouts.app')

@section('content')

    <table class="table table-hover table-striped">
        {{ Form::open(['route' => ['dish.multi-edit'], 'enctype' => 'multipart/form-data', 'method' => 'get']) }}
        <thead>
        <tr>
            <th>Select</th>
            <th>Gerecht</th>
            <th>Omschrijving</th>
            <th>Allergenen</th>
            <th>Prijs</th>
            <th>Gerecht type</th>
            <th>Recepten</th>
            <th>Foto</th>
            <th>Beheer functies</th>
        </tr>
        </thead>
        <tbody>
        <button class="btn btn-success m-1 p-2" type="submit" formaction="{{ route('dish.multi-edit') }}">edit
        </button>
        <button class="btn btn-danger m-1 p-2" type="submit" formaction="{{ route('dish.multi-select') }}">Verwijder
            alle
            geselecteerde
        </button>

        @foreach($dishes as $dish)
            <tr>
                <td>
                    {{ Form::checkbox('dishes[]', $dish->id) }}

                </td>
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
                <td><img src="{{ asset( 'storage/'.$dish->path) }}" alt='1'
                         class="text-center w-50"></td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('dish.show', $dish) }}"
                           class="btn btn-secondary m-1 p-2"
                           type="edit">Details</a>
                        <a href="{{ route('dish.edit', $dish) }}" class="btn btn-success m-1 p-2 "
                           type="edit">Bewerken</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ Form::close() }}

    <a href="{{ route('dish.create') }}" class="btn btn-success m-1 p-2">Voeg toe</a>
    <div class="pagination justify-content-end"> {{ $dishes->links() }} </div>
@endsection

