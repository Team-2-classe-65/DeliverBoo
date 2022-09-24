<template>
    <div class="section-categories py-5">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h2 class="text-center">Le categorie dei ristoranti più amati</h2>
                </div>
            </div>
            <!-- <input type="text" v-model="search" placeholder="Cerca il tuo ristorante preferito"> -->
            <div class="row">
                <div class="col-xs-12 pb-4 col-md-4 pb-md-3 ps-3" v-for="category in categories" :key="category.id">
                    <a href="#">
                        <div class="card-categories overlay">
                           <img class="w-100" v-if="category.img" :src="category.img">
                            <img v-else src="img/placeholder.jpg">
                            <div class="restaurant-details" >
                                <span>{{ category.name }}</span>
                                <a>Scopri ristoranti {{ category.name}} <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import axios from 'axios';
import { state } from "../store";

export default {
    name: "TheCategories",
    data() {
        return {
            //categories: [],
            // search:'',
        }
    },
    methods: {
        // getCategories() {

        //     axios
        //     .get("/api/categories" )
        //     .then((response) => {
        //         this.categories = response.data;
        //     })

        // }
    },
    mounted() {
        // this.getCategories();
    },
    computed:{
        // filteredCategories: function(){
        //     return this.categories.filter((category)=>{
        //         return category.name.match(this.search)
        //     })
        // },
        categories(){
            return state.categories
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