<template>
    <!-- nav-section -->
    <div class="nav-section pt-1">
        <div class="container">
            <!-- navbar -->
            <nav class="navbar">
                <a class="navbar-logo text-decoration-none" href="#">
                    <!-- deliveboo logo -->
                    <img class="logo" src="img/unnamed.png" alt="deliveboo logo">
                    <span class="fw-bold text-white">deliveBoo</span>
                </a>
                <div>
                    <button type="button" class="btn btn-light">Registrati o accedi</button>
                    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span>Menu</span> 
                    </button>
                </div>
            </nav>

            <div class="row ">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <div class="search-section">
                            <div class="fs-1 fw-bold mb-4 search-title" >I piatti che ami, a domicilio.</div>
                            <div class="bg-white search p-5">
                                <div class="mb-2">Inserisci il tuo indirizzo per trovare ristoranti nei dintorni</div>
                                <div class="d-flex">
                                    <input type="text" class="form-control" placeholder="Inserisci il tuo indirizzo completo">
                                    <button type="button" class="btn search-btn text-white">Cerca</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid bg-home my-5" src="img/bg-home.svg" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    .container {
        min-width: 300px;
    }

    .logo {
        width: 50px;
        height: 50px;
    }

    .nav-section {
        background-color: #00CCBC;
        min-height: 600px;
        max-height: 900px;
        min-width: 300px;
    }

    .search-section {
        padding-top: 120px;
        min-width: 300px;
        max-width: 600px;
    }

    .search-title {
        color: #440263;
    }

    .search-btn {
        background-color: #00CCBC;
    }

    .signin {
        color: #00CCBC;
    }

    .bg-home {
        min-width: 200px;
        height: 200px;
    }

    .search {
        height: 170px;
        width: 300px;
    }

    .form-control {
        width: 100px;
        margin-right: 10px;
    }
</style>
