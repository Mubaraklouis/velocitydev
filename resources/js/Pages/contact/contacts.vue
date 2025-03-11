<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ContactTable from './partials/contactTable.vue';

defineProps({
    contacts: Object
});


</script>

<template>

    <AuthenticatedLayout>
        <ContactTable :contacts="contacts"/>
    </AuthenticatedLayout>

</template>
