<h1>Clients</h1>

<ul>
@foreach($clients as $client)
    <li>{{ $client->name  }} ({{ $client->banner }})</li>
@endforeach
</ul>
