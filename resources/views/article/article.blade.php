@include('layout.menu')


<!-- Recent Sales Start -->
<div class="content">
    
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="pagetitle col-lg-8">
            <a href="{{route('article.create')}}"><button type="button" class="btn btn-danger text-center">AJOUTER</button></a>
          </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste des articles</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($article as $article)
                    <tr>
                        <td>{{ $article->id}}</td>
                        <td>{{ $article->nom}}</td>
                        <td>{{ $article->nombre}}</td>
                        <td>{{ $article->categorie}}</td>
                        <td>
                            <a  href="{{route('article.edit', $article->id )}}"><i href="" style = "color:blue;" class="bi bi-pen"></i></a> 
                            <a  href="{{url('supprim-art/' .$article->id)}}"><i href="" style = "color:red;" class="bi bi-trash"></i></a>
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