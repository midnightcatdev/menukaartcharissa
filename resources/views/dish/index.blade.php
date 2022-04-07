@extends('layouts.app')
@section('content')
    <h1>Gerechten lijst</h1>
    {{ Form::open(['route' => ['dish.multi-edit'], 'method' => 'get']) }}
    {{--    {{ Form::open(['route' => ['dish.destroy-selected'], 'method' => 'delete']) }}--}}
    <table class="table table-hover table-responsive-lg">
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

        {{--        {{ Form::submit('Verwijder',['class' => 'btn btn-danger m-1']) }}--}}
        {{--        {{  link_to_route('dish/destroy-selected',['class' => 'btn btn-danger m-1']) }}--}}
        {{--        {{  Form::link_to_route('dish.destroy-selected', $title = null, $parameters = [], $attributes = []) }}--}}
        {{--        {{ Form::link_to_action('DishController@destroy-selected', $title = null, $parameters = [], $attributes = []) }}--}}

        {{ Form::submit('Edit',['class' => 'btn btn-success m-1']) }}

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
                           class="btn btn-secondary m-1"
                           type="edit">Details</a>
                        <a href="{{ route('dish.edit', $dish) }}" class="btn btn-success m-1" type="edit">Bewerken</a>
                        {{ Form::open(['route' => ['dish.destroy', $dish], 'method' => 'delete']) }}
                        {{ Form::submit('Verwijder',['class' => 'btn btn-danger m-1']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ Form::close() }}
    <a href="{{ route('dish.create') }}" class="btn btn-success mt-0 m-2" type="edit">Voeg toe</a>
    <div> {{ $dishes->links() }} </div>
@endsection
