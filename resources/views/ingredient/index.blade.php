@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="col">Ingredient</th>
            <th class="col">Meet eenheid</th>
            <th class="col">Waarde</th>
            <th class="col">Beheer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ingredients as $ingredient)
            <tr>
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->unit }}</td>
                <td>{{ $ingredient->value }}</td>
                <td class="d-flex">
                    <div class="me-1">
                        <a href="{{ route('ingredient.show',[request()->restaurant, $ingredient]) }}"
                           class="btn btn-secondary" type="edit">Info</a>
                        @can('update', $ingredient)
                            <a href="{{ route('ingredient.edit',[request()->restaurant, $ingredient]) }}"
                               class="btn btn-success" type="edit">bewerk</a>
                        @endcan
                    </div>
                    <div class="delete-button">
                        @can('delete', $ingredient)
                            {{ Form::open(['route' => ['ingredient.destroy', request()->restaurant, $ingredient], 'method' => 'delete']) }}
                            {{ Form::submit('Verwijder',['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @can('create', $ingredient)
        <a href="{{ route('ingredient.create', $restaurant->name) }}" class="btn btn-success mt-0 m-2"
           type="edit">Voeg ingredient toe</a>
    @endcan
    <div> {{ $ingredients->links() }} </div>
@endsection
