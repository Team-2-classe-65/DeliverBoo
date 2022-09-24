import Home from './Pages/home.vue';

import PageNotFound from './Pages/PageNotFound.vue'

// import per la pagina delle categorie di Anna
import TheMenu from './Pages/TheMenu.vue';



export const routes = [
    { path: "/", component: Home, name: "home" },

    { path: "*", component: PageNotFound  },

    // ho aggiunto in modo commentato le rotte che dovremo mettere nel file per far funzionare il componente di Anna
    { path: "/themenu", component: TheMenu, name: "TheMenu"  }
];

