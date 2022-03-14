@extends('layouts.app')
@section('content')
    <h1>Dagdelen lijst</h1>
    <table class="table table-bordered table-responsive-lg">
        <tr class="table-light">
            <th class="col-lg-2">Dagdeel</th>
            <th class="col-lg-4">Type gerecht</th>
            <th class="col-lg-3 justify-content-end">Beheer functies</th>
        </tr>
        <tr>
            @foreach ($dayparts as $daypart)
                <td>{{ $daypart->name }}</td>
                <td>
                    @foreach($daypart->foodtypes as $foodtype)
                        <ul class="list-group">
                            <li class="list-group-item mb-1">  {{$foodtype->name}} </li>
                        </ul>
                    @endforeach
                </td>
                <td>
                    <div class="d-flex">


                        <a href="{{ route('daypart.show', $daypart) }}" class="btn btn-secondary m-1 " type="edit">Meer
                            info</a>
                        <a href="{{ route('daypart.edit', $daypart) }}" class="btn btn-success m-1"
                           type="edit">Bewerken</a>
                        <a class="delete-button">
                            {{--                            hoe maak ik van die link een icon --}}
                            {{--                            <button type="button" class="btn btn-labeled btn-danger">--}}
                            {{--                                <span class="btn-label"><i class="fa fa-trash"></i></span>--}}
                            {{--                            </button>--}}
                            {{ Form::open(['route' => ['daypart.destroy', $daypart], 'method' => 'delete']) }}
                            {{ Form::submit('Verwijderen',['class' => 'btn btn-danger m-1']) }}
                            {{ Form::close() }}
                        </a>
                    </div>
                </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('daypart.create') }}" class="btn btn-success mt-0 m-2" type="edit">Nieuw dagdeel</a>
@endsection
