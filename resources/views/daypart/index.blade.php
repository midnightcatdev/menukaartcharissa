@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
            <th class="col-lg-2">Dagdelen lijst</th>
            <th class="col-lg-7">Type gerecht</th>
            <th class="col-lg-3">Beheer functies</th>
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
                           class="btn btn-secondary me-1" type="edit">Meer
                            {{--                            href="{{ route('daypart.index',[request()->restaurant]) }}">{{ __('Dagdelen') }}</a>--}}
                            info</a>
                        @can('update', $daypart)
                            <a href="{{ route('daypart.edit',[request()->restaurant, $daypart]) }}"
                               class="btn btn-success me-1"
                               type="edit">Bewerken</a>
                        @endcan
                        @can('delete', $daypart)
                            {{ Form::open(['route' => ['daypart.destroy',request()->restaurant,$daypart], 'method' => 'delete']) }}
                            {{ Form::submit('Verwijderen',['class' => 'btn btn-danger']) }}
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
