<template>
    <div>

      <header>
        <TheNavbar></TheNavbar>
      </header>

      <main>
        <router-view></router-view>
      </main>
        <PlateInfo></PlateInfo>
      <footer>
        <TheFooter></TheFooter>
      </footer>
    </div>
</template>

<script>
import PlateInfo from '../components/PlateInfo.vue';
import TheFooter from '../components/TheFooter.vue';
import TheNavbar from '../components/TheNavbar.vue';
    export default{
    components: { PlateInfo, TheFooter, TheNavbar }
}
</script>