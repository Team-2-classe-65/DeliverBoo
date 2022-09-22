require('./bootstrap');
import Vue from "vue";
import App from "./views/App.vue";
import AOS from 'aos';
import 'aos/dist/aos.css';
require('./bootstrap');

AOS.init();
<<<<<<< HEAD
=======

import VueRouter from "vue-router";
import {routes} from "./routes";

Vue.use(VueRouter);
>>>>>>> a6e801eb1495047d8e9886f000e0dddf7b097a45

new Vue({
    el:'#app',
    render: (h) => h(App),

    router: new VueRouter({
        routes,
        mode: "history"
    })
})
