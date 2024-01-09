@include('layout.menu')


<!-- Recent Sales Start -->
<div class="content">
    
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="pagetitle col-lg-8">
            <a href="{{route('client.create')}}"><button type="button" class="btn btn-danger text-center">AJOUTER UN CLIENT</button></a>
          </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste des Clients</h6>
        </div>
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
                <tbody>
                    @foreach($client as $client)
                    <tr>
                        <td>{{ $client->id}}</td>
                        <td>{{ $client->nom}}</td>
                        <td>{{ $client->prenom}}</td>
                        <td>{{ $client->sexe}}</td>
                        <td>{{ $client->telephone}}</td>
                        <td>
                            <a  href="{{route('client.edit', $client->id )}}"><i href="" style = "color:blue;" class="bi bi-pen"></i></a> 
                            <a  href="{{url('supprim-cli/' .$client->id)}}"><i href="" style = "color:red;" class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Recent Sales End -->