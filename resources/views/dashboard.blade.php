<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.style')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        
        @include('layout.nav')
        
    
     <!-- Content Start -->
        <div class="content">
            @include('layout.header')
    
            <!-- Sale & Revenue Start -->
            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-people fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Clients</p>
                                <h6 class="mb-0">{{ $clientCount }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-basket2 fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Linges</p>
                                <h6 class="mb-0">52</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-basket2 fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Factures</p>
                                <h6 class="mb-0">5</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
    <div class="container-fluid pt-4 px-4">
<img src="assets/img/pre.png" alt="">
    </div>
        </div>
        <!-- Content End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('layout.js')
   
</body>

</html>