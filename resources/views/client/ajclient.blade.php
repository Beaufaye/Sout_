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
                    <h6 class="mb-4">Ajout d'un client</h6>
                    <form action="{{route('client.store')}}" method="POST" class="form-group">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nom du client</label>
                            <input type="text" name="nom"  class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Prénom du client</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Sexe</label>
                            <select class="form-select" name="sexe" aria-label="Default select example" required>
                                <option selected>Quel est votre sexe?</option>
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Téléphone du client</label>
                            <input type="text" name="telephone" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href="{{route('client.index')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES CLIENTS</button></a>
                    </form>
                    
                </div>
            </div>
           
           
            
           
            
           
          
        </div>
    </div>
    <!-- Form End -->
</div>