@extends('layouts.app')
@section('content')

    <a href="{{ route('daypart.create') }}" class="btn btn-success m-2" type="edit">Create</a>

    <table class="table table-bordered table-responsive-lg">
        <tr class="bg-light">
            <th>Dagdeel</th>
            <th>foodtypes</th>
            <th>Aanpassen</th>
        </tr>
        @foreach ($dayparts as $daypart)
            <tr>
                <td>{{ $daypart->name }}</td>
                <td>{{ $daypart->foodtypes }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('daypart.edit', $daypart) }}" class="btn btn-success" type="edit">Edit</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['daypart.destroy', $daypart], 'method' => 'delete']) }}
                        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
