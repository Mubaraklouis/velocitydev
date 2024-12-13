

<template>
    <div class="bg-[#363092] py-10">
        <h1 class="text-3xl font-bold text-center text-white my-10">
            what we can do?
        </h1>

        <div class="services-wrapper">
            <Service/>
            <firstService/>
            <secondService/>
        </div>

    </div>
</template>
<script setup>
import Service from './service.vue';
import firstService from '@/Components/services/firstService.vue';
import secondService from '@/Components/services/secondService.vue';

//get the width of the laptop screen

const screenSize = window.innerWidth;

alert(screenSize)





</script>

<style scoped>
/* Media query for laptop medium size  screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {
.services-wrapper{


    width: 100%;
    display:grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap:59px;
    margin-left: 91px;
    margin-right:91px;

}


}

/* Media querry for large size laptop screen */
@media screen and (min-width:1441px) and (max-width:1920px){

.services-wrapper{


width: 100%;
display:grid;
grid-template-columns: 1fr 1fr 1fr;
gap:59px;
margin-left: 91px;
margin-right:91px;

}

}


/* media query for tablet size and large mobile phones */






</style>


