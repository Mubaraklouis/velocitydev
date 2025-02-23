<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ServiceTable from './partials/serviceTable.vue';

defineProps({
    services: Object
});



</script>

<template>

    <div>
        <AuthenticatedLayout>

            <ServiceTable :services="services"/>

        </AuthenticatedLayout>


    </div>
</template>
