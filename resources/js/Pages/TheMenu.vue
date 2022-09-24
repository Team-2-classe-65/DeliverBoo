<template>
    <div class="container">
        <!-- top img -->
        <img class="top-img" src="../img/Pizza-logos.png" alt="">
        <div class="fs-2">Dettagli</div>
        <div class="row">
            <div class="col-lg-3" v-for="result in results" :key="result.id">
                <div class="card mb-3">
                    <div class="pizza-img">
                        <img :src="result.picture" alt="">
                    </div>
                    <div class="card-body">
                        <div class="card-title text-dark fs-4">{{result.title}}</div>
                        <div class="card-description">{{result.description}}</div>
                        <div class="card-price">{{result.price}}</div>
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
    name: "TheMenu",
    data() {
        return {
            results: [
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Margherita",
                    "description" : "Pomodoro e mozzarella",
                    "price": "6.50€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Diavola",
                    "description" : "Pomodoro, mozzarella, salame piccante e peperoncino",
                    "price": "8.50€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Funghi",
                    "description" : "Pomodoro, mozzarella e funghi",
                    "price": "8.00€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Marinara",
                    "description" : "Pomodoro, alici, origano e aglio",
                    "price": "6.00€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Capricciosa",
                    "description" : "Pomodoro, mozzarella, prosciutto crudo, uovo, funghi, carciofini e olive",
                    "price": "9.50€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "4 Formaggi",
                    "description" : "Mozzarella, provola, gorgonzola e brie",
                    "price": "9.00€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Boscaiola",
                    "description" : "Mozzarella, funghi e salsiccia",
                    "price": "9.00€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Broccoli e salsiccia",
                    "description" : "Mozzarella, salsiccia e broccoli",
                    "price": "8.50€",
                },
                {
                    "picture": require(`../img/margherita.jpg`),
                    "title": "Patate e salsiccia",
                    "description" : "Mozzarella, patate e salsiccia",
                    "price": "10.00€",
                },
            ],
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