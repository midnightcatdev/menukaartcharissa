@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="col-9">Type gerechten lijst</th>
            <th class="col-3">Beheer functies</th>
        </tr>
        </thead>
        <tbody>
        @foreach($foodtypes as $foodtype)
            <tr>
                <td>{{ $foodtype->name }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('foodtype.show', $foodtype) }}" class="btn btn-secondary" type="edit">Meer
                            info</a>
                        @can('update', $foodtype)
                            <a href="{{ route('foodtype.edit', $foodtype) }}" class="btn btn-success"
                               type="edit">Bewerken</a>
                        @endcan
                    </div>
                    <div class="delete-button">
                        @can('delete', $foodtype)
                            {{ Form::open(['route' => ['foodtype.destroy', $foodtype], 'method' => 'delete']) }}
                            {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @can('create', $foodtype)
        <a href="{{ route('foodtype.create') }}" class="btn btn-success mt-0 m-2" type="edit">Voeg type gerecht toe</a>
    @endcan
    <div> {{ $foodtypes->links() }} </div>
@endsection
