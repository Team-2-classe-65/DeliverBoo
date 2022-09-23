import Home from './Pages/home.vue';

// import per la pagina non trovata 
import PageNotFound from './Pages/PageNotFound.vue';

// import per la pagina delle categorie di Anna
// import TheCategories from './components/TheCategories.vue';



export const routes = [
    { path: "/", component: Home, name: "home" },

    // questa qui sarà la nostra rotta per la pagina non trovata per la
    { path: "*", component: PageNotFound  },

    // ho aggiunto in modo commentato le rotte che dovremo mettere nel file per far funzionare il componente di Anna
    // { path: "/categorie", component: TheCategories, name: "TheCategories.index" },
];