@extends('layouts.app')
@section('content')
    <div class="menukaart text-center">
        <div class="col align-items-center">
            @foreach($dayparts as $daypart)
                <div class="daypart bg-light h2">
                    {{ $daypart->name }}
                </div>
                @foreach($daypart->foodtypes as $foodtype)
                    <div class="foodtype h4">
                        {{ $foodtype->name }}
                    </div>
                    @foreach($foodtype->dishes as $dish)
                        <div class="dish h6">
                            {{ $dish->name }}
                        </div>
                    @endforeach
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
