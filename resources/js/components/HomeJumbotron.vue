<template>
    <div class="nav-section">
        <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <div class="search-section position-realtive" style="z-index:10">
                            <div class="fs-1 fw-bold mb-4 search-title" >I piatti che ami, a domicilio.</div>

                            <!-- <div class="bg-white search p-5">
                                <div class="mb-2">Inserisci il tuo indirizzo per trovare ristoranti nei dintorni</div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <input type="text" class="form-control" placeholder="Inserisci la tua categoria preferita">

                                    <button type="button" class="btn btn-primary text-white" >Cerca</button>
                                </div>
                            </div> -->
                            
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
</template>

<script>
    export default {
        name: 'HomeJumbotron'
    }
</script>

<style>
    .nav-section {
        position: relative;
        background-color: #D0EB99;
        z-index: -1;
    }

    .nav-section::before {
    content: "";
    width: 100%;
    height: 280px;
    position: absolute;
    right: 0;
    background-color: #00ccbc;
    transform: skewY(-4deg);
    transform-origin: left;
    }
</style>