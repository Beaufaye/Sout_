<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">ePressing</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                @if(Auth::user()->pp)
                <img class="rounded-circle" src="{{ asset(Auth::user()->pp)}}" alt="" style="width: 40px; height: 40px;">
                @endif
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('client.index')}}" class="nav-item nav-link"><i class="bi bi-people"></i> CLIENTS</a>
            <a href="{{route('article.index')}}" class="nav-item nav-link"><i class="bi bi-cart"></i> LINGES</a>
            <a href="{{route('facture.index')}}" cl
            *ss="nav-item nav-link"><i class="bi bi-receipt"></i> FACTURES</a>
            <a href="{{route('gestionutilisateur.index')}}" class="nav-item nav-link"><i class="bi bi-person-circle"></i> UTILISATEURS</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
