@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="col-lg-2">Recept</th>
            <th class="col-lg-3">Bereidingswijze</th>
            <th class="col-lg-2">Ingredienten</th>
            <th class="col-lg-2">Gerecht</th>
            <th class="col-lg-3">Beheer functies</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->name }}</td>
                <td>{{ $recipe->steps }}</td>
                <td>
                    @foreach($recipe->ingredients as $ingredient)
                        <ul class="list-group">
                            <li class="list-unstyled">{{$ingredient->name}}</li>
                        </ul>
                @endforeach
                <td> {{ $recipe->dish->name ?? 'none' }} </td>
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
        </tbody>
    </table>
    <a href="{{ route('recipe.create') }}" class="btn btn-success m-2">Voeg recept toe</a>
    <div> {{ $recipes->links() }} </div>
@endsection
