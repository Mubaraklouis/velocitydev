<template>
    <div class="bg-[#363092] w-full h-fit mt-0">
        <h1 class="text-3xl font-bold text-center text-white">
            what we can do?
        </h1>

        <div class="service-wrapper">
            <Service/>
            <Service/>
            <Service/>
        </div>

    </div>
</template>
<script setup>
import Service from './service.vue';


</script>

<style scoped>
/* Media query for laptop screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {
.service-wrapper{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin:60px;
}
}



</style>


