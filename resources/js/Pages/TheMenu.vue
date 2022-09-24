<template>
    <div class="menu-section">
        <img class="top-img" :src="restaurant.restaurant_img" alt="">
        <div class="container py-5">
            <div class="fs-2 text-uppercase fw-bold mb-3">Scegli i tuoi Piatti</div>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3 h-100" v-for="dish in restaurant.dishes" :key="dish.id">
                    <div class="card" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="100">
                        <img class="card-img-top restaurant-img" :src="'Storage/' + dish.dish_img"
                            :alt="dish.name">
                        <div class="card-body">
                            <h5 class="card-title">{{ dish.name }}</h5>
                            <p class="card-text mt-3">Prezzo: {{dish.price }}€</p>
                            <div>
                                <span class="border border-2 border-dark rounded p-1 me-1"><i class="fa-solid fa-plus"></i></span>
                                <span class="border border-2 border-dark rounded p-1"><i class="fa-solid fa-minus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="fs-2">Carrello</div>
                    <div>Total Price</div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            restaurant: {}
        }
    },
    mounted() {

        axios.get("/api/" + this.$route.params.slug)
            .then((resp) => {
                this.restaurant = resp.data
                console.log(this.restaurant)
            })
    }
}
</script>


<style lang="scss" scoped>
    .menu-section {
        background-color: #00ccbc;
    }
    .top-img {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
    }

    .restaurant-img {
        max-height: 220px;
        object-fit: cover;
    }

    .card-img-top {
        width: 100%;
        height: 200px;
    }

    .card {
        background: rgba(208, 235, 153, 0.36);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.9px);
        -webkit-backdrop-filter: blur(6.9px);
        border: 1px solid rgba(208, 235, 153, 1);
    }

    .restaurant-img {
        height: 220px;
        object-fit: cover;
    }

</style>