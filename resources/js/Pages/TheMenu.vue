<template>
    <div>
        <div
                id="modal-cart"
                style="z-index: 5"
                tabindex="-1"
                class="modal-bg position-fixed top-0 bottom-0 end-0 start-0 d-none align-items-center justify-content-center px-3"
            >
                <div class="modal-dialog bg-white rounded p-3">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                Hai degli elementi nel carrello
                            </h5>
                        </div>
                        <div class="modal-body">
                            <p>
                                Per accedere ad altro ristorante bisogna
                                svuotare il carrello.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <!-- button to close the modal -->
                            <button
                                class="btn btn-secondary"
                                @click="closeModalCart()"
                            >
                                Continua sulla pagina
                            </button>

                            <button
                                class="btn btn-danger mt-3"
                                @click="removeAllFromSession()"
                            >
                                Svuota carrello
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <div v-if="restaurant.slug">
            <img class="top-img" :src="restaurant.restaurant_img" alt="">
            <div class="container py-5">
                <div class="fs-2 text-uppercase fw-bold mb-3">Scegli i tuoi Piatti</div>
                <div class="row g-4">
                    <div class="col-6 col-md-4 col-lg-3 h-100" v-for="dish in restaurant.dishes" :key="dish.id">
                        <div class="card" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="100">
                            <img class="card-img-top restaurant-img" :src="'Storage/' + dish.dish_img" :alt="dish.name">
                            <div class="card-body">
                                <h5 class="card-title">{{ dish.name }}</h5>
                                <p class="card-text mt-3">Prezzo: {{dish.price }}€</p>
                                <div>
                                    <span class="border border-2 border-dark rounded p-1 me-1" @click="addToCart(dish)"><i
                                            class="fa-solid fa-plus"></i></span>
                                    <span class="border border-2 border-dark rounded p-1" @click="removeOneFromCart(dish)"><i
                                            class="fa-solid fa-minus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="border border-2 rounded">
                    <div class="">
                        <div
                    v-for="dish in cart"
                    :key="dish.id"
                    class="row g-3"
                >
                    <div class="col-3">
                        <div class="dish-image">
                            <!-- image of the dish -->
                            <img
                                :src="'Storage/' + dish.dish_img"
                                :alt="dish.name"
                                class="img-thumbnail plate-img img-dish-cart"
                            />
                        </div>
                    </div>

                    <div class="col-9 dish-information">
                        <div class="dish-and-price">
                            <!-- title and price -->
                            <p class="text-orange">{{ dish.name }}</p>
                            <p class="ps-1 price text-nowrap">
                                € {{ dish.price }}
                            </p>
                        </div>

                        <!-- cart quantity handle -->
                        <div
                            class="d-flex align-items-center cart-quantity-button"
                        >
                            <!-- bin icon -->
                            <a
                                class="no-decoration"
                                href="http://"
                                @click="removeAllFromCart(dish)"
                                ><i class="fa-solid fa-trash no-decoration"></i
                            ></a>
                            <!-- add and remove item from cart  -->
                            <div
                               
                            >
                                <div class="display-num-pill-button">
                                    {{ dish.quantity }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                    
                </div>
            </div>

            <!-- here start check-out -->

            <div class="my-5 px-5">
                
                <div class="container d-flex justify-content-center my-5">
                    
                    <div class=" d-flex justify-content-end">
                        <img class="img-thumbnail w-25" src="../../../public/img/Shopping-Cart.jpg" alt=""></img>
                    </div>

                    <h1 class="text-center">
                        Checkout
                    </h1>
                     
                </div> 
                <!-- <img
                    class="w-100"
                    src="/images/checkout-bg.svg"
                    alt="checkout-bg"
                /> -->
                <div class="checkout-section bg-soft">
                    <div class="container py-3">
                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="text-start text-checkout-start fs-5">
                                    Consegna
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end fs-5 text-checkout-end">
                                    € {{ restaurant.delivery_price }}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-start text-checkout-start fs-5">
                                    Prodotti
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end text-checkout-end fs-5">
                                    € {{ partialTotal }}
                                </div>
                            </div>
                            <div class="total-line"></div>
                            <div class="col-6">
                                <div class="text-start text-checkout-start fs-2">
                                    Totale
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end text-checkout-end fs-2">
                                    € {{ total }}
                                </div>
                            </div>
                        </div>

                        <!-- <div class="checkout-open mt-3">
                            <h2 class="pt-3 text-white text-shadow">Checkout</h2>
                            <form
                                action=""
                                method="post"
                                enctype="multipart/form-data"
                            >
                                <div class="form-group my-3">
                                    <label class="fw-semibold text-orange fs-5 pb-1"
                                        >Nome*</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="form-group my-3">
                                    <label class="fw-semibold text-orange fs-5 pb-1"
                                        >Cognome*</label
                                    >
                                    <input
                                        type="text"
                                        name="lastname"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="form-group my-3">
                                    <label class="fw-semibold text-orange fs-5 pb-1"
                                        >Indirizzo*</label
                                    >
                                    <input
                                        type="text"
                                        name="address"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="form-group my-3">
                                    <label class="fw-semibold text-orange fs-5 pb-1"
                                        >Email*</label
                                    >
                                    <input
                                        type="text"
                                        name="email"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="form-group my-3">
                                    <label class="fw-semibold text-orange fs-5 pb-1"
                                        >Numero di telefono*</label
                                    >
                                    <input
                                        type="text"
                                        name="phone"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div id="dropin-container"></div>
                                <button id="submit-button" class="btn btn-primary">
                                    Ordina
                                </button>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>

        <div v-else class="container py-5 my-5">
            <div class="py-5 my-5 text-center display-1 text-uppercase fw-bold">
                questo ristorante non esiste
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
        showDetails(id) {
            let modal = document.getElementById("modal-" + id);
            modal.classList.replace("d-none", "d-flex");
        },
        hideDetails(id) {
            let modal = document.getElementById("modal-" + id);
            modal.classList.replace("d-flex", "d-none");
        },
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
            this.total = this.partialTotal;
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
            if (this.cart.length == 0) {
                sessionStorage.removeItem("cart");
                sessionStorage.removeItem("partialTotal");
                sessionStorage.removeItem("total");
                this.partialTotal = 0;
                this.total = 0;
            }
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
            this.total = this.partialTotal;
            sessionStorage.setItem("total", JSON.stringify(this.total));
            if (this.cart.length == 0) {
                sessionStorage.removeItem("cart");
                sessionStorage.removeItem("partialTotal");
                sessionStorage.removeItem("total");
                this.partialTotal = 0;
                this.total = 0;
            }
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
    max-height: 220px;
    object-fit: cover;
}

.card-img-top {
    width: 100%;
    height: 200px;
}

.restaurant-img {
    height: 220px;
    object-fit: cover;
}
.img-dish-cart{
    height: 100px;
    width: 100%;
    object-fit: cover;
}
</style>