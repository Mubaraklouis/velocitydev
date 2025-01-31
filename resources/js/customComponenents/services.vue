<template>
    <div class="relative footer-separator">
        <div class="custom-shape-divider-top-1738359697">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>

</div>
    <div class="bg-[#363092] py-10">
        <h1 class="text-3xl font-bold text-center text-white my-10">
            what we can do?
        </h1>

        <div class="services-wrapper">
            <Service />
            <firstService />
            <secondService />
        </div>
    </div>
</template>
<script setup>
import Service from "./service.vue";
import firstService from "@/Components/services/firstService.vue";
import secondService from "@/Components/services/secondService.vue";
</script>

<style scoped>
/* this is the general size of the application */
.services-wrapper {
    width: screen;
    margin: 24px;
}

/* Media query for laptop medium size  screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {
    .services-wrapper {
        width: screen;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 59px;
        margin-left: 200px;
        margin-right: 200px;
    }
}

/* Media querry for large size laptop screen */
@media screen and (min-width: 1441px) and (max-width: 1920px) {
    .services-wrapper {
        width: screen;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 59px;
        margin-left: 200px;
        margin-right: 200px;
    }
}

/* media query for tablet size and large mobile phones */
@media screen and (min-width: 800px) and (max-width: 1023px) {
    .services-wrapper {
        width: screen;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 59px;
        margin-left: 91px;
        margin-right: 91px;
    }
}
</style>
