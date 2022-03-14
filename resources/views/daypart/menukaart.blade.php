@extends('layouts.app')
@section('content')

    {{--    Under construction--}}
    <ul class="list-unstyled list-inline">
        @foreach($dayparts as $daypart)
            {{ $daypart->name }}
            @foreach($dishes as $dish)
                <ul> {{ $dish->name }} </ul>
                <ul> {{ $dish->description }} </ul>
            @endforeach
        @endforeach
    </ul>

    {{--        @foreach($dayparts as $daypart)--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col">--}}
    {{--                        {{ $daypart->name }}--}}
    {{--                        @foreach($dishes as $dish)--}}
    {{--                            {{ $dish->name }}--}}
    {{--                            {{ $dish->description }}--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                    <div class="col">--}}
    {{--                        {{ $daypart->name }}--}}
    {{--                        @foreach($dishes as $dish)--}}
    {{--                            {{ $dish->name }}--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                    <div class="col">--}}
    {{--                        {{ $daypart->name }}--}}
    {{--                        @foreach($dishes as $dish)--}}
    {{--                            {{ $dish->name }}--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--    @endforeach--}}
@endsection
