@extends('layouts.app')
@section('content')

    <a href="{{ route('ingredient.create') }}" class="btn btn-success m-2" type="edit">Create</a>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Measure Unit</th>
            <th>Measurement</th>
        </tr>

        @foreach($ingredients as $ingredient)
            <tr>
                <td>{{ $ingredient->id }}</td>
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->measureunit }}</td>
                <td>{{ $ingredient->measurement }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('ingredient.edit', $ingredient) }}" class="btn btn-success"
                           type="edit">Edit</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['ingredient.destroy', $ingredient], 'method' => 'delete']) }}
                        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
