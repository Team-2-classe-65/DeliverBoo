import Home from './Pages/home.vue';

import PageNotFound from './Pages/PageNotFound.vue'

// import per la pagina delle categorie di Anna
import TheMenu from './Pages/TheMenu.vue';



export const routes = [
    { path: "/", component: Home, name: "home" },
    { path: "/:slug", component: TheMenu, name: "TheMenu"  },
    { path: "*", component: PageNotFound  },
    
];

