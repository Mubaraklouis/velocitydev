<template>
    <div class="bg-[#363092]">
        <h1 class="text-3xl font-bold text-center text-white">
            what we can do?
        </h1>

        <div class="service-wrapper">


            <Service/>
            <!-- <Service/>
            <Service/> -->
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
    margin-left: 7.64%;
    margin-right: 7.64%;
    /* display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin:60px; */
    width: screen;

    border: 2px solid red;

}

.testing{
    display :grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
}


.service-shadow{
    grid-area: 1/1;
    width:392px;
    height: 352px;
    background-color: #C4C4C4;
}

.testing2{
    grid-area:1/1;

}
}





</style>


