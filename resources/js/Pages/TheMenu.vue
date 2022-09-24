<template>
    <div class="container">
        <!-- top img -->
        <img class="top-img" src="" alt="">
        <div class="fs-2">Dettagli</div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="pizza-img">
                        
                    </div>
                    <div class="card-body">
                        <div class="card-title text-dark fs-4">HelloWorld</div>
                        <div class="card-description">HelloWorld</div>
                        <div class="card-price">Hello world</div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="fs-2">Carrello</div>
                <div>Total Price</div>
            </div>
        </div>
    </div>
</template>

<script>
    
export default {
    data() {
        return {
            
        };
    }
}
</script>


<style lang="scss" scoped>
    img {
        width: 100%;
    }

    .top-img {
        width: 100%;
    }
    .card {
        background-color: #00ccbc;
        height: 380px;
    }
</style>