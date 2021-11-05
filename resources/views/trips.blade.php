@extends('layouts.main')

@yield('title','Trips')

@section('content')
    @foreach ($trips as $trip)
        <h1>{{$trip->name}}</h1>
        <h2>{{$trip->nazione}}</h2>
        <h3>{{$trip->regione}}</h3>
        <h4>{{$trip->citta}}</h4>
        <h5>{{$trip->prezzo}}</h5>
    @endforeach
@endsection