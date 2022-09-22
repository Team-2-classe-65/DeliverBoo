require('./bootstrap');
import Vue from "vue";
import App from "./views/App.vue";
import AOS from 'aos';
import 'aos/dist/aos.css';
require('./bootstrap');

AOS.init();
<<<<<<< HEAD

import VueRouter from "vue-router";
import {routes} from "./routes";

Vue.use(VueRouter);
=======
>>>>>>> 92618fd7c58166adf9c3ee35c51affe553388661

new Vue({
    el:'#app',
    render: (h) => h(App),

    router: new VueRouter({
        routes,
        mode: "history"
    })
})
