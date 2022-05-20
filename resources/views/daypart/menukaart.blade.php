@extends('layouts.app')
@section('content')

    {{--    {{ dd($restaurant->name) }}--}}

    <div class="row">
        <div class="col"> ochtend
            @foreach($restaurant->dayparts as $daypart)
                <div class="daypart h2">
                    {{ $daypart->name }}
                </div>
                @foreach($daypart->foodtypes as $foodtype)
                    <div class="foodtype h4">
                        {{ $foodtype->name }}
                    </div>
                    @foreach($foodtype->dishes as $dish)
                        <div class="dish h6">
                            {{ $dish->name }}
                            <img
                                src="{{ asset( 'storage/'.$dish->path) }}" alt='1'
                                class="text-center w-50">
                        </div>
                    @endforeach
                @endforeach
            @endforeach
        </div>
        <div class="col-4">middag</div>
        <div class="col-4">avond</div>
    </div>

    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4 bg-secondary">
            <div class="text-center">
                @foreach($dayparts as $daypart)
                    <div class="daypart h2">
                        {{ $daypart->name }}
                    </div>
                    @foreach($daypart->foodtypes as $foodtype)
                        <div class="foodtype h4">
                            {{ $foodtype->name }}
                        </div>
                        @foreach($foodtype->dishes as $dish)
                            <div class="dish h6">
                                {{ $dish->name }}
                                <img
                                    src="{{ asset( 'storage/'.$dish->path) }}" alt='1'
                                    class="text-center w-50">
                            </div>
                        @endforeach
                    @endforeach
                @endforeach
                <div class="col-4"></div>
            </div>
        </div>
    </div>
@endsection
