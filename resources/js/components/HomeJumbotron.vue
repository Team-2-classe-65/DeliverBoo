<template>
    <div class="nav-section">
        <div class="row row-cols-2">
            <div class="col">
                <div class="team-2 bg-home fs-1 animation fw-bold">#A casa tua con deliverboo By Team 2</div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="search-section" style="z-index:10">
                        <div class="fs-1 fw-bold mb-4 search-title animation" >I piatti che ami, a domicilio.</div>
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid bg-home my-5 position-relative" src="img/bg-home.svg" alt="" style="z-index:10">
                        </div>
                    </div>
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

    .team-2 {
        transform: rotate(-4deg);
        top: 300px;
        left: 10px;
        min-width: 80px;
        max-width: 400px;
    }

    .animation {
        animation: ani 1s;
        transform-origin: left;
        color: #440263;
        position: relative;
    }

    @keyframes ani{
        from {
            letter-spacing: 35px;
            filter: blur(5px);
            opacity: 0;
        } to {
            letter-spacing: 0;
            filter: blur(0);
            opacity: 1px;
        }
    }

    .bg-home {
        min-width: 100px;
        min-height: 100px;

    }
</style>