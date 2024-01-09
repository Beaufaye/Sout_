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
                    <h6 class="mb-4">Ajout d'un article</h6>
                    <form action="{{route('article.store')}}" method="POST" class="form-group">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nom de l'article</label>
                            <input type="text" name="nom"  class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="number" name="nombre" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Catégorie</label>
                            <input type="text" name="categorie" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href="{{route('article.index')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES ARTICLES</button></a>
                    </form>
                    
                </div>
            </div>
           
           
            
           
            
           
          
        </div>
    </div>
    <!-- Form End -->
</div>