@extends('layouts.app')
@section('content')

    <div class="container p-3 d-flex">
        <div class="col-6 p-3 border rounded">
            <h3> Stuur een vraag </h3>
            {{ Form::open(['route' => ['contact.store', [request()->restaurant]]]) }}
            {{ Form::label('name', 'Naam:', ['class' => 'form-label'] ) }}
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Naam', )) }}
            {{ Form::label('email', 'Email:', ['class' => 'form-label'] ) }}
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'uw-email@gmail.com', )) }}
            {{ Form::label('question', 'Uw vraag:', ['class' => 'form-label'] ) }}
            {{ Form::text('question', null, array('class' => 'form-control', 'placeholder' => 'Type hier uw vraag', )) }}
            {{ Form::submit('Verzend vraag!',['class' => 'btn btn-success mt-3']) }}
            {{ Form::close() }}
        </div>

        <div class="col-6 p-2 ms-1 border rounded">
            <h3>Adres</h3>
            <ul class="list-unstyled">
                <li>Contact gegevens</li>
                <li>Utrecht straat 37</li>
                <li>Utrecht</li>
                <li>Telefoon: 0666666</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="col-12 mb-3" id="map"></div>
    </div>

@endsection
