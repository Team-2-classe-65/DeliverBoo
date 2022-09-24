import Home from './Pages/home.vue';

// import per la pagina non trovata 
// import PageNotFound from './Pages/PageNotFound.vue'

// import per la pagina delle categorie di Anna
import TheHomeMain from './components/TheHomeMain.vue';
import TheMenu from './Pages/TheMenu.vue';



export const routes = [
    { path: "/", component: Home, name: "home.index" },

    // questa qui sarà la nostra rotta per la pagina non trovata per la
    //{ path: "/*", component: PageNotFound },

    // ho aggiunto in modo commentato le rotte che dovremo mettere nel file per far funzionare il componente di Anna
    { path: "/categorie", component: TheHomeMain, name: "TheHomeMain.index" },
    { path: "/:user_id/user", component: TheMenu, name: "TheMenu.show"  }
];

