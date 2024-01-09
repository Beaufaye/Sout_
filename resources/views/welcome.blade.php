<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.style')
</head>

<body>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary">ePressing</h3>
                            </a>
                            <h5>Connectez-vous</h5>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mot de passe</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="">Mot de passe oublié</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Se connecter</button>
                        <p class="text-center mb-0">Vous n'avez pas de compte? <a href="{{route('register')}}">S'Inscrire</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
</form>
    @include('layout.js')
   
</body>

</html>