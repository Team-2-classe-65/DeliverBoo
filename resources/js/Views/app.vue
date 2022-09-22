<template>
    <div>
      <h1>
        AUGURI DEBORAAAAAAAA
      </h1> 

      <header>
        <TheNavbar></TheNavbar>
      </header>

      <main>
        <router-view></router-view>

        <PlateInfo></PlateInfo>
      </main>

      <footer>
        <TheFooter></TheFooter>
      </footer>
    </div>
</template>

<script>
import PlateInfo from '../Pages/PlateInfo.vue';
import TheFooter from '../Pages/TheFooter.vue';
import TheNavbar from '../Pages/TheNavbar.vue';
    export default{
    components: { PlateInfo, TheFooter, TheNavbar }
}
</script>