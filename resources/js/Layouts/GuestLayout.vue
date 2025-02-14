<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import navbar from '@/customComponenents/navigationBar/navbar.vue';
import  Footer from '@/customComponenents/folder/footer.vue';
</script>

<template>

    <navbar/>

    <slot/>

    <Footer/>
</template>
