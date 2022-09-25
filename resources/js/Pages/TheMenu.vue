<template>
    <div>
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

export function round(number, precision) {
    "use strict";
    precision = precision ? +precision : 0;
    var sNumber = number + "",
        periodIndex = sNumber.indexOf("."),
        factor = Math.pow(10, precision);
    if (periodIndex === -1 || precision < 0) {
        return Math.round(number * factor) / factor;
    }
    number = +number;
    // sNumber[periodIndex + precision + 1] is the last digit
    if (sNumber[periodIndex + precision + 1] >= 5) {
        // Correcting float error
        // factor * 10 to use one decimal place beyond the precision
        number += (number < 0 ? -1 : 1) / (factor * 10);
    }
    return +number.toFixed(precision);
}

export default {
    data() {
        return {
            restaurant: {},
            cart:{},
            quantity: 1,
            partialTotal: 0,
            total: 0,
        }
    },
    mounted() {

        axios.get("/api/" + this.$route.params.slug)
            .then((resp) => {
                this.restaurant = resp.data
                console.log(this.restaurant)
            }),
            this.cart = JSON.parse(sessionStorage.getItem("cart"));
    },
    methods:{
        addToCart(dish) {
            if (sessionStorage.getItem("cart") != null) {
                if (this.cart[0].user_id != this.restaurant.id)  {
                    this.checkCart();
                    this.addToCart().preventDefault();
                }
            }
            if (sessionStorage.getItem("cart") == null) {
                sessionStorage.setItem("cart", JSON.stringify([]));
            }
            let cart = JSON.parse(sessionStorage.getItem("cart"));
            let index = cart.findIndex((item) => item.id == dish.id);
            if (index == -1) {
                dish.quantity = 1;
                cart.push(dish);
            } else {
                cart[index].quantity++;
            }
            sessionStorage.setItem("cart", JSON.stringify(cart));
            this.cart = JSON.parse(sessionStorage.getItem("cart"));
            this.partialTotal = round(
                this.cart.reduce(
                    (acc, dish) => acc + dish.price * dish.quantity,
                    0
                ),
                2
            );
            sessionStorage.setItem(
                "partialTotal",
                JSON.stringify(this.partialTotal)
            );
            this.total = this.partialTotal + this.restaurant.delivery_price;
            sessionStorage.setItem("total", JSON.stringify(this.total));
        },
        //check if the dish user_id has the same id of the restaurant, if not, show a popup with a button that allow to empty the cart and another button that allow to go back to the restaurant page
        checkCart() {
            if (this.cart.length > 0) {
                if (this.cart[0].user_id != this.restaurant.id) {
                    let modal = document.getElementById("modal-cart");
                    modal.classList.replace("d-none", "d-flex");
                }
            }
        },
        closeModalCart() {
            let modal = document.getElementById("modal-cart");
            modal.classList.replace("d-flex", "d-none");
        },
        removeAllFromSession() {
            sessionStorage.removeItem("cart");
            sessionStorage.removeItem("partialTotal");
            sessionStorage.removeItem("total");
            this.cart = [];
            this.partialTotal = 0;
            this.total = 0;
            this.closeModalCart();
        },
        removeOneFromCart(dish) {
            let cart = JSON.parse(sessionStorage.getItem("cart"));
            let index = cart.findIndex((item) => item.id == dish.id);
            if (index !== -1) {
                cart[index].quantity--;
                if (cart[index].quantity == 0) {
                    cart.splice(index, 1);
                }
            }
            sessionStorage.setItem("cart", JSON.stringify(cart));
            this.cart = JSON.parse(sessionStorage.getItem("cart"));
            this.partialTotal = round(
                this.cart.reduce(
                    (acc, dish) => acc + dish.price * dish.quantity,
                    0
                ),
                2
            );
            sessionStorage.setItem(
                "partialTotal",
                JSON.stringify(this.partialTotal)
            );
            this.total = this.partialTotal + this.restaurant.delivery_price;
            sessionStorage.setItem("total", JSON.stringify(this.total));
        },
        removeAllFromCart(dish) {
            let cart = JSON.parse(sessionStorage.getItem("cart"));
            let index = cart.findIndex((item) => item.id == dish.id);
            if (index !== -1) {
                cart.splice(index, 1);
            }
            sessionStorage.setItem("cart", JSON.stringify(cart));
            this.cart = JSON.parse(sessionStorage.getItem("cart"));
            this.partialTotal = round(
                this.cart.reduce(
                    (acc, dish) => acc + dish.price * dish.quantity,
                    0
                ),
                2
            );
            sessionStorage.setItem(
                "partialTotal",
                JSON.stringify(this.partialTotal)
            );
            this.total = this.partialTotal + this.restaurant.delivery_price;
            sessionStorage.setItem("total", JSON.stringify(this.total));
        },
    }
}
</script>


<style lang="scss" scoped>
.top-img {
    width: 100%;
    max-height: 300px;
    object-fit: cover;
}

.restaurant-img {
    height: 220px;
    object-fit: cover;
}
</style>