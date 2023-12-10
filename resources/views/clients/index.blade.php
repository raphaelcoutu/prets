@extends('layout')

@section('body')
    <h1>Clients</h1>

    <ul>
        @foreach($clients as $client)
            <li><a href="/clients/{{$client->id}}/edit">{{ $client->name }} ({{ $client->banner }})</a></li>
        @endforeach
    </ul>

    <a href="{{ route('clients.create') }}">Ajouter un client</a>

    <a href="/">Accueil</a>
@endsection
