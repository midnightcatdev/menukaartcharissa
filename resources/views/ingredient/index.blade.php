@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="col-lg-2">Ingredient</th>
            <th class="col-lg-2">Meet eenheid</th>
            <th class="col-lg-5">Waarde</th>
            <th class="col-lg-3">Beheer functies</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ingredients as $ingredient)
            <tr>
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->unit }}</td>
                <td>{{ $ingredient->value }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('ingredient.show', $ingredient) }}" class="btn btn-secondary" type="edit">Meer
                            info</a>
                        <a href="{{ route('ingredient.edit', $ingredient) }}" class="btn btn-success" type="edit">Bewerken</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['ingredient.destroy', $ingredient], 'method' => 'delete']) }}
                        {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('ingredient.create') }}" class="btn btn-success mt-0 m-2" type="edit">Voeg ingredient toe</a>
    <div> {{ $ingredients->links() }} </div>
@endsection
