import Vue from "vue";
import App from "./views/App.vue";
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();


new Vue({
    el:'#app',
    render: (h) => h(App),
})
