@extends('layouts.app')
@section('content')

<h1>Contact</h1>

<div class="container-lg d-flex">
    <div class="form-control w-50 col-6">
<h3> Stuur een vraag </h3>
    {{ Form::open(['route' => ['contact.store']]) }}
    {{ Form::label('username', 'Naam:', ['class' => 'form-label'] ) }}
    {{ Form::text('username', null, ['class' => 'form-control'] ) }}
    {{ Form::label('email', 'Email:', ['class' => 'form-label'] ) }}
    {{ Form::text('email', 'voorbeeld@gmail.com', ['class' => 'form-control'] ) }}
    {{ Form::label('question', 'Uw vraag:', ['class' => 'form-label'] ) }}
    {{ Form::text('question', 'Type hier uw vraag', ['class' => 'form-control'] ) }}
    {{ Form::submit('Verzend vraag!',['class' => 'btn btn-success mt-3']) }}
    {{ Form::close() }}
    </div>
    <div class="col-6 border border-2 rounded ml-2 p-2">
        <h3>Contact gegevens</h3>
        <p> Admin Straat</p>
        <p> Admin 0000AD </p>
        <p> Utrcht </p>
        <p> tel:12345678</p>
    </div>
</div>
@endsection
