<h1>Clients</h1>

<ul>
@foreach($clients as $client)
    <li><a href="/clients/{{$client->id}}">{{ $client->name  }} ({{ $client->banner }})</a></li>
@endforeach
</ul>

<a href="/">Accueil</a>
