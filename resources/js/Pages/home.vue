<template>
    <div>
        <TheCategories></TheCategories>
        <PlateInfo></PlateInfo>
    </div>
</template>

<script>
    import PlateInfo from '../components/PlateInfo.vue';
import TheCategories from '../components/TheCategories.vue';

    export default{
    components: { PlateInfo, TheCategories }
}
</script>