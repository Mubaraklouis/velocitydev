<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PortfolioTable from './partials/portfolioTable.vue';

defineProps({
    projects: Array
});



</script>

<template>

    <div>
        <AuthenticatedLayout>

         <PortfolioTable :projects="projects"/>

        </AuthenticatedLayout>


    </div>
</template>

