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
                    <h6 class="mb-4">Faire une facture</h6>
                    <form action="{{route('facture.store')}}" method="POST" class="form-group">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date</label>
                            <input type="date" name="date"  class="form-control" id=""
                                aria-describedby="">
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href="{{route('facture.index')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES FACTURES</button></a>
                    </form>
                    
                </div>
            </div>
           
        </div>
    </div>
    <!-- Form End -->
</div>