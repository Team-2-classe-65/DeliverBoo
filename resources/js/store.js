import Vue from "vue";
import axios from "axios";

export const state = Vue.observable({

  categories: [],

});

export function searchCategories(userSearch){
    
    // chiamata per vedere le categorie
        axios
        .get("/api/categories",{
            // params:{
            //   query: userSearch  
            // }
        })
        .then((response) => {
            state.categories = response.data;
        })

        // console.log(this.categories);
    
}