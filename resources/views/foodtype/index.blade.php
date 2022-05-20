@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="col">Type gerechten lijst</th>
            <th class="col">Beheer</th>
        </tr>
        </thead>
        <tbody>
        {{--        {{ dd($restaurant) }}--}}
        @foreach($foodtypes as $foodtype)
            <tr>
                <td>{{ $foodtype->name }}</td>
                <td class="d-flex">
                    <div class="edit-button me-1">
                        <a href="{{ route('foodtype.show',[request()->restaurant, $foodtype]) }}"
                           class="btn btn-secondary" type="edit">Info</a>
                        @can('update', $foodtype)
                            <a href="{{ route('foodtype.edit',[request()->restaurant, $foodtype]) }}"
                               class="btn btn-success"
                               type="edit">Bewerk</a>
                        @endcan
                    </div>
                    <div class="delete-button">
                        @can('delete', $foodtype)
                            {{ Form::open(['route' => ['foodtype.destroy', request()->restaurant, $foodtype], 'method' => 'delete']) }}
                            {{ Form::submit('Verwijder',['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @can('create', $foodtype)
        <a href="{{ route('foodtype.create',[request()->restaurant, $foodtype]) }}" class="btn btn-success mt-0 m-2"
           type="edit">Voeg type gerecht toe</a>
    @endcan
    <div> {{ $foodtypes->links() }} </div>
@endsection
