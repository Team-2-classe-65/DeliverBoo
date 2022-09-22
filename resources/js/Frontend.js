require('./bootstrap');
import Vue from "vue";
import App from "./views/App.vue";
import AOS from 'aos';
import 'aos/dist/aos.css';
require('./bootstrap');

AOS.init();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> cfdc8b23f2ca2877c343534c8263e049925676c5

import VueRouter from "vue-router";
import {routes} from "./routes";

Vue.use(VueRouter);
<<<<<<< HEAD

=======
>>>>>>> a6e801eb1495047d8e9886f000e0dddf7b097a45
>>>>>>> cfdc8b23f2ca2877c343534c8263e049925676c5

new Vue({
    el:'#app',
    render: (h) => h(App),

    router: new VueRouter({
        routes,
        mode: "history"
    })
})
