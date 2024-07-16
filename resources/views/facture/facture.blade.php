@include('layout.menu')


<!-- Recent Sales Start -->
<div class="content">
    
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="pagetitle col-lg-8">
            <a href="{{route('facture.create')}}"><button type="button" class="btn btn-danger text-center">FAIRE UNE FACTURE</button></a>
          </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Liste des Factures</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facture as $facture)
                    <tr>
                        <td>{{ $facture->id}}</td>
                        <td>{{ $facture->Date}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Recent Sales End -->