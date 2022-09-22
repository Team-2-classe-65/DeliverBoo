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
                <div class="d-flex">
                    <button type="button" class="btn btn-light mx-3">Registrati o accedi</button>
                    
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-bs-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <div class="search-section position-realtive" style="z-index:10">
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
                        <img class="img-fluid bg-home my-5 position-relative" src="img/bg-home.svg" alt="" style="z-index:10">
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
        position: relative;
        background-color: #D0EB99;
    }

    .nav-section::before {
    content: "";
    width: 110%;
    height: 280px;
    position: absolute;
    right: 0;
    background-color: #00ccbc;
    transform: skewY(-4deg);
    transform-origin: left;
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
        min-height: 200px;
        max-height: 400px;
    }

    .search {
        height: 170px;
        min-width: 300px;
    }

    .form-control {
        min-width: 100px;
        margin-right: 10px;
    }
</style>