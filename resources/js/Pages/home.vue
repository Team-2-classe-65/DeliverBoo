<template>
    <div>
        <TheHomeMain></TheHomeMain>
        <PlateInfo></PlateInfo>
        <TheMenu></TheMenu>
    </div>
</template>

<script>
    import PlateInfo from '../components/PlateInfo.vue';
    import TheHomeMain from '../components/TheHomeMain.vue'  
    import TheMenu from '../Pages/TheMenu.vue'
    export default{
        // qui dentro va inserito il file TheCategories di Anna
    components: {  PlateInfo, TheHomeMain, TheMenu}

}
</script>