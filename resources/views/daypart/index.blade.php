@extends('layouts.app')
@section('content')
    <h1>Dagdelen lijst</h1>
    <table class="table table-bordered table-responsive-lg">
        <tr class="bg-light">
            <th>Dagdeel</th>
            <th>Type gerecht</th>
            <th>Beheer functies</th>
        </tr>
        @foreach ($dayparts as $daypart)
            <tr>
                <td>{{ $daypart->name }}</td>
                <td>{{ $daypart->foodtypes }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('daypart.show', $daypart) }}" class="btn btn-secondary" type="edit">Meer
                            info</a>
                        <a href="{{ route('daypart.edit', $daypart) }}" class="btn btn-success" type="edit">Bewerken</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['daypart.destroy', $daypart], 'method' => 'delete']) }}
                        {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('daypart.create') }}" class="btn btn-success mt-0 m-2" type="edit">Nieuw dagdeel</a>
@endsection
