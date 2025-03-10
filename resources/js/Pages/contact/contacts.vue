<script setup>
import ContactTable from './partials/contactTable.vue';

defineProps({
    contacts: Object
});


</script>

<template>
    <ContactTable :contacts="contacts"/>
</template>
