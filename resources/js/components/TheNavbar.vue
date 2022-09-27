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
                <div class="d-flex align-items-bottom">
                    <a href="/login" class="btn btn-light text-decoration-none">Accedi</a>
                    <a href="/register" class="btn btn-light ms-3 text-decoration-none">Registrati</a>
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

    .search-title {
        color: #440263;
    }

    .search-btn {
        background-color: #00CCBC;
    }

    .signin {
        color: #00CCBC;
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