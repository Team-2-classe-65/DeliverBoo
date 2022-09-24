<template>
    <!-- nav-section -->
    <div class="my-nav">
        <div class="container">
            <!-- navbar -->
            <nav class="navbar">
                <a class="navbar-logo text-decoration-none" href="/">
                    <!-- deliveboo logo -->
                    <img class="logo" src="img/unnamed.png" alt="deliveboo logo">
                    <span class="fw-bold text-white">deliveBoo</span>
                </a>
                <div class="d-flex">
                    <button type="button" class="btn btn-light mx-3">Registrati o accedi</button>
                    
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-bs-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>
<script>

    // import { searchCategories } from '../store';

    export default{
        data(){
            return{
                name:"TheNavbar",
                userSearch:'',
            }
        },
        methods:{
            
        },
    }
</script>

<style>
    .container {
        min-width: 300px;
    }

    .logo {
        width: 50px;
        height: 50px;
    }

    .my-nav {
        background-color: #00CCBC;
    }

    .search-section {
        padding-top: 120px;
        min-width: 300px;
        max-width: 600px;
    }

    .search-title {
        color: #440263;
    }

    .search-btn {
        background-color: #00CCBC;
    }

    .signin {
        color: #00CCBC;
    }

    .bg-home {
        min-width: 200px;
        min-height: 200px;
        max-height: 400px;
    }

    .search {
        height: 170px;
        min-width: 300px;
    }

    .form-control {
        min-width: 100px;
        margin-right: 10px;
    }
</style>