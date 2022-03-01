@extends('layouts.app')
@section('content')

    <a href="{{ route('foodtype.create') }}" class="btn btn-success m-2" type="edit">Create new foodtype</a>

    <table class="table table-bordered table-responsive-lg">
        <tr class="bg-light">
            <th>id</th>
            <th>foodtype</th>
            <th>Action</th>
        </tr>

        @foreach($foodtypes as $foodtype)
            <tr>
                <td>{{ $foodtype->id }}</td>
                <td>{{ $foodtype->name }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('foodtype.edit', $foodtype) }}" class="btn btn-success" type="edit">Edit</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['foodtype.destroy', $foodtype], 'method' => 'delete']) }}
                        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
