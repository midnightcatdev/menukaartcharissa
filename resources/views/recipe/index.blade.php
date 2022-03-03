@extends('layouts.app')
@section('content')
    <h1>Recepten lijst</h1>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Name</th>
            <th>Bereidingswijze</th>
            <th>Beheer functies</th>
        </tr>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->name }}</td>
                <td>{{ $recipe->steps }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('recipe.show', $recipe) }}" class="btn btn-secondary" type="edit">Meer
                            info</a>
                        <a href="{{ route('recipe.edit', $recipe) }}" class="btn btn-success" type="edit">Bewerken</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['recipe.destroy', $recipe], 'method' => 'delete']) }}
                        {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('recipe.create') }}" class="btn btn-success m-2" type="edit">Voeg recept toe</a>
@endsection
