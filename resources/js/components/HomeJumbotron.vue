<template>
    <div class="nav-section">
        <div class="container">
            <div class="row">
            <div class="col">
<<<<<<< HEAD
                <div class="team-2 fs-1 fw-bold">#A casa tua con deliverboo By Team 2</div>
=======
                <div class="team-2 bg-home fs-1 animation fw-bold">#A casa tua con deliverboo By Team 2</div>
>>>>>>> 7cc04efd6ac99a10a084b795b598e6e130c3be6a
            </div>
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="search-section" style="z-index:10">
                        <div class="fs-1 fw-bold mb-4" data-aos="fade-down">I piatti che ami, a domicilio.</div>
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid bg-home my-5 position-relative" src="img/bg-home.svg" alt="" style="z-index:10" data-aos="fade-left">
                        </div>
                    </div>
                </div>
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
        position: relative;
        transform: rotate(-4deg);
        top: 300px;
    }
    .bg-home {
<<<<<<< HEAD
        min-width: 200px;
        max-height: 400px;
=======
        min-width: 100px;
        min-height: 100px;

>>>>>>> 7cc04efd6ac99a10a084b795b598e6e130c3be6a
    }
</style>