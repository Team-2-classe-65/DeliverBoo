import Home from './Pages/home.vue';

// import per la pagina delle categorie di Anna
// import TheCategories from './components/TheCategories.vue';



export const routes = [
    { path: "/", component: Home, name: "home" },

    // ho aggiunto in modo commentato le rotte che dovremo mettere nel file per far funzionare il componente di Anna
    // { path: "/categorie", component: TheCategories, name: "TheCategories" },
];