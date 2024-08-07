@include('layout.menu')


<!-- Recent Sales Start -->
<div class="content">
    
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
       
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Linges déposés</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Catégorie</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($article as $article)
                    <tr>
                        <td>{{ $article->id}}</td>
                        <td>{{ $article->nom}}</td>
                        <td>{{ $article->nombre}}</td>
                        <td>{{ $article->categorie}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Recent Sales End -->