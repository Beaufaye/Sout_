<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                @auth
                    @if(Auth::user()->pp)
                        <img class="rounded-circle me-lg-2" src="{{ asset('storage/' . Auth::user()->pp) }}" alt="Photo de profil" style="width: 40px; height: 40px;">
                    @else
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="Photo de profil par défaut" style="width: 40px; height: 40px;">
                    @endif
                    <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                @endauth
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item text-center"><button class="btn btn-dark text-center">Mon Profil</button></a>
                <a href="#" class="dropdown-item text-center"><button class="btn btn-dark text-center">Paramètres</button></a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-dark text-center">{{ __('Déconnexion') }}</button>
                </form>
            </div>
        </div>
    </div>
    
</nav>
<!-- Navbar End -->