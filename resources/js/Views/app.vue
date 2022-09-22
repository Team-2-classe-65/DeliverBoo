<template>
    <div>
      <h1>
        AUGURI DEBORAAAAAAAA
      </h1> 

      <header>

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
    export default{
    components: { PlateInfo, TheFooter }
}
</script>