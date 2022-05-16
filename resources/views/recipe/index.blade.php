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
                <td>
                    <div class="d-flex">
                        <a href="{{ route('recipe.show', [request()->restaurant, $recipe]) }}"
                           class="btn btn-secondary me-1" type="edit">Meer
                            info</a>
                        @can('update', $recipe)
                            <a href="{{ route('recipe.edit',[request()->restaurant,$recipe] ) }}"
                               class="btn btn-success me-1"
                               type="edit">Bewerken</a>
                        @endcan
                        @can('delete', $recipe)
                            {{ Form::open(['route' => ['recipe.destroy',request()->restaurant,$recipe], 'method' => 'delete']) }}
                            {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @can('create', $recipe)
        <a href="{{ route('recipe.create', request()->restaurant) }}" class="btn btn-success m-2">Voeg recept toe</a>
    @endcan
    <div> {{ $recipes->links() }} </div>
@endsection
