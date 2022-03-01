@extends('layouts.app')
@section('content')

    <a href="{{ route('recipe.create') }}" class="btn btn-success m-2" type="edit">Create</a>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Steps</th>
            <th>Action</th>
        </tr>

        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->id }}</td>
                <td>{{ $recipe->name }}</td>
                <td>{{ $recipe->steps }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('recipe.edit', $recipe) }}" class="btn btn-success" type="edit">Edit</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['recipe.destroy', $recipe], 'method' => 'delete']) }}
                        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
