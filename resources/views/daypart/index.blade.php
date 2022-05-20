@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="col">Dagdelen lijst</th>
            <th class="col">Type gerecht</th>
            <th class="col">Beheer</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($dayparts as $daypart)
                <td>{{ $daypart->name }}</td>
                <td>
                    @foreach($daypart->foodtypes as $foodtype)
                        <ul class="list-group">
                            <li class="list-unstyled">  {{$foodtype->name}} </li>
                        </ul>
                    @endforeach
                </td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('daypart.show',[request()->restaurant, $daypart]) }}"
                           class="btn btn-secondary me-1" type="edit">Info</a>
                        @can('update', $daypart)
                            <a href="{{ route('daypart.edit',[request()->restaurant, $daypart]) }}"
                               class="btn btn-success me-1"
                               type="edit">Bewerk</a>
                        @endcan
                        @can('delete', $daypart)
                            {{ Form::open(['route' => ['daypart.destroy',request()->restaurant,$daypart], 'method' => 'delete']) }}
                            {{ Form::submit('Verwijder',['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        @endcan
                    </div>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @can('create', $daypart)
        <a href="{{ route('daypart.create', request()->restaurant) }}" class="btn btn-success p-2 m-1" type="edit">Nieuw
            dagdeel</a>
    @endcan
@endsection
