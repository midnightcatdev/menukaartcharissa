@extends('layouts.app')
@section('content')
    <h1>Type gerechten lijst</h1>
    <table class="table table-hover table-responsive-lg">
        <tr>
            <th class="col-9">Naam</th>
            <th class="col-3">Beheer functies</th>
        </tr>
        @foreach($foodtypes as $foodtype)
            <tr>
                <td>{{ $foodtype->name }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('foodtype.show', $foodtype) }}" class="btn btn-secondary" type="edit">Meer
                            info</a>
                        <a href="{{ route('foodtype.edit', $foodtype) }}" class="btn btn-success"
                           type="edit">Bewerken</a>
                    </div>
                    <div class="delete-button">
                        {{ Form::open(['route' => ['foodtype.destroy', $foodtype], 'method' => 'delete']) }}
                        {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('foodtype.create') }}" class="btn btn-success mt-0 m-2" type="edit">Voeg type gerecht toe</a>
    <div> {{ $foodtypes->links() }} </div>
@endsection
