<template>
    <!-- nav-section -->
    <div class="nav-section pt-1">
        <div class="container">
            <!-- navbar -->
            <nav class="navbar">
                <a class="navbar-logo text-decoration-none" href="#">
                    <!-- deliveboo logo -->
                    <img src="img/unnamed.png" width="50" height="50" alt="deliveboo logo">
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

            <div class="row">
                <div class="col">
                    <div class="search-section">
                        <div class="fs-1 fw-bold mb-4 search-title" >I piatti che ami, a domicilio.</div>
                        <div class="bg-white p-5 h-50">
                            <div class="mb-2">Inserisci il tuo indirizzo per trovare ristoranti nei dintorni</div>
                            <div class="d-flex">
                                <input type="text" class="form-control" placeholder="Inserisci il tuo indirizzo completo">
                                <button type="button" class="btn search-btn text-white">Cerca</button>
                            </div>
                            <div class="mt-2">
                                <a class="signin" href="">Accedi</a>
                                <span>per visualizzare i tuoi indirizzi recenti.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img class="bg-home my-5" src="img/bg-home.svg" alt="" width="300" height="400">
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    .nav-section {
        background-color: #00CCBC;
        height: 600px;
        min-width: 600px;
    }

    .search-section {
        padding-top: 120px;
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
        margin-left: 200px;
    }

    .form-control {
        width: 380px;
        margin-right: 10px;
    }
</style>
