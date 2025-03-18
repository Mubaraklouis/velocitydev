<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import portfolio from './portfolio.vue';
import Title from '../partials/Title.vue';
import ServicePagination from '@/Pages/services/partials/servicePagination.vue';




const props = defineProps({
    projects:Array
})

</script>


<template>
    <GuestLayout>
        <Title title="Portfolio" description="We worked and build a range of project with our client" class="mt-32"/>
    <div>

<portfolio :projects="projects"/>

  <div class="flex justify-center">
    <ServicePagination :services="projects"/>
  </div>

</div>
    </GuestLayout>


</template>

<style>
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
