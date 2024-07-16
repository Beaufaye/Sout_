@if($clients->isEmpty())
    <tr>
        <td colspan="6" class="text-center">Aucun résultat</td>
    </tr>
@else
@foreach($clients as $client)
<tr>
    <td>{{ $client->id }}</td>
    <td>{{ $client->nom }}</td>
    <td>{{ $client->prenom }}</td>
    <td>{{ $client->sexe }}</td>
    <td>{{ $client->telephone }}</td>
    <td>
        <a href="{{ route('client.edit', $client->id) }}"><button class="btn btn-secondary">Modifier</button></a> 
        <a href="{{ url('supprim-cli/' . $client->id) }}"><button class="btn btn-danger">Supprimer</button></a>
        <a href="{{ route('article.create') }}"><button class="btn btn-warning">Déposer des linges</button></a>
    </td>
</tr>
@endforeach
@endif