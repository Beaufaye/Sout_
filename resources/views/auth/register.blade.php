<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.style')
</head>

<body>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
    <div class="container-fluid position-relative d-flex p-0">
         <!-- Sign Up Start -->
         <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary">ePressing</h3>
                            </a>
                            <h3>S'Inscrire</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Nom d'utilisateur</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" name="pp" class="form-control" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Photo de profil</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mot de passe</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Confirmez mot de passe</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">S'Inscrire</button>
                        <p class="text-center mb-0">Vous avez deja un compte? <a href="">Connectez-vous</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Sign Up End --> 
        </form>
      
   
       


    

    @include('layout.js')
   
</body>

</html>