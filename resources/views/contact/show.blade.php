@extends('layouts.app')
@section('content')

    <div>
        <p>Show</p>

        {{ $restaurant->name }}
        {{ $contact->streetname }}
        {{ $contact->postcode }}
        {{ $contact->city }}

    </div>

@endsection
