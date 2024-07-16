<!-- resources/views/client/client.blade.php -->
@include('layout.menu')

<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="pagetitle col-lg-8">
                <a href="{{ route('client.create') }}"><button type="button" class="btn btn-danger text-center">AJOUTER UN CLIENT</button></a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Liste des Clients</h6>
            </div>
            <div class="container">
                <!-- Barre de recherche -->
                <form id="searchForm" class="mb-3">
                    <div class="input-group">
                        <input type="text" id="query" name="query" class="form-control" placeholder="Rechercher un client" aria-label="Rechercher un client" aria-describedby="button-search" value="{{ request()->input('query') }}">
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Sexe</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="clientTableBody">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#query').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('client.search') }}",
                type: "GET",
                data: { 'query': query },
                success: function(data) {
                    $('#clientTableBody').html(data);
                }
            });
        });
    });
</script>
