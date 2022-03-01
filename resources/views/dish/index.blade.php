@extends('layouts.app')
@section('content')

    <a href="{{ route('dish.create') }}" class="btn btn-success m-2" type="edit">Create</a>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Gerecht</th>
            <th>Omschrijving</th>
            <th>Allergenen</th>
            <th>Prijs</th>
        </tr>

        @foreach($dishes as $dish)
            <tr>
                <td>{{ $dish->id }}</td>
                <td>{{ $dish->name }}</td>
                <td>{{ $dish->description}}</td>
                <td>{{ $dish->allergies }}</td>
                <td>{{ $dish->prijs }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('dish.edit', $dish) }}" class="btn btn-success" type="edit">Edit</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['dish.destroy', $dish], 'method' => 'delete']) }}
                        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
