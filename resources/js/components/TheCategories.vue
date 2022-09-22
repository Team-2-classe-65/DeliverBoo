<template>
    <div class="section-categories py-5">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h2>Le categorie dei ristoranti più amati</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cucina-cinese.jpg" alt="">
                            <div class="restaurant-details" >
                                <span>Cinese</span>
                                <p>Scopri ristoranti cinesi <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/giapponese2.jpg" alt="">
                            <div class="restaurant-details">
                                <span>Giapponese</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cucina-greco.jpg" alt="">
                            <div class="restaurant-details">
                                <span>Greco</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cucina-italiana.jpeg" alt="">
                            <div class="restaurant-details">
                                <span>Italiano</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cucina-indiana.jpg" alt="">
                            <div class="restaurant-details">
                                <span>Indiano</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cucina-pizza.jpg" alt="">
                            <div class="restaurant-details">
                                <span>Pizzeria</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cucina-spagnola.jpg" alt="">
                            <div class="restaurant-details">
                                <span>Spagnolo</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cannoli.jpg" alt="">
                            <div class="restaurant-details">
                                <span>Dolci & Dessert</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3">
                    <a href="#">
                        <div class="card-categories overlay">
                            <img class="w-100" src="../assets/img/cibo3.jpg" alt="">
                            <div class="restaurant-details">
                                <span>Fast-Food</span>
                                <p>Scopri cucina cinese <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "TheCategories",
    data() {
        return {

        }
    }
}
</script>

<style lang="scss" scoped>
    .section-categories {
        background: rgb(255, 234, 228);

        .row {
    
            .col-xs-12.col-md-4 {
                padding-left: 0;
                padding-right: 0;
    
                a {
                    text-decoration: unset;
                    color: white;
                
                    .card-categories {
                        height: 12.5rem;
                        position: relative;
                        display: block;
                        transition: 0.5s;
                        border-radius: .625rem;
                        overflow: hidden;
                    
                        img {
                            height: 100%;
                            object-fit: cover;
                        }
                        
                        .restaurant-details {
                            position: absolute;
                            font-size: 1.5625rem;
                            font-weight: 500;
                            z-index: 20;
                            bottom: 0.125rem;
                            padding: 0 0.5rem;
                            margin-bottom: 0rem;

                            p {
                                font-size: .9375rem;
                                text-decoration: underline;
                            }

                            .fa-arrow-right {
                                margin-left: .4375rem;
                            }
                        }
    
                        &:hover {
                            transform: scale(1.1);
                        }
    
                    }
                    .overlay::after {
                        content: "";
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        position: absolute;
                        background: linear-gradient(transparent, #525252);
                        opacity: .8;
                    }
                }
            }
        }
    }
</style>