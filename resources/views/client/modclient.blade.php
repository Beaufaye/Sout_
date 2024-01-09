@include('layout.menu')

<div class="content">
      <!-- Form Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">

                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Modification d'un article</h6>
                    <form action="{{route('client.update', [$client->id])}}" method="POST" class="form-group">
                        @method('PATCH')
                        @csrf

                        <input type="text" name="id" style="display: none;" value="{{ $client->id }}">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nom du client</label>
                            <input type="text" name="nom"  class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $client->nom }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Prénom du client</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" value="{{ $client->prenom }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Sexe</label>
                            <select class="form-select" name="sexe" aria-label="Default select example" value="{{ $client->sexe }}"  required>
                                <option selected>Quel est votre sexe?</option>
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select>  
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                            <input type="number" name="telephone" class="form-control" id="exampleInputPassword1" value="{{ $client->telephone }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <a href="{{route('client.index')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES ARTICLES</button></a>
                    </form>
                    
                </div>
            </div>
           
        </div>
    </div>
    <!-- Form End -->
</div>