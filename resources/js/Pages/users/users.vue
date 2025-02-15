<script setup lang="ts">
import UsersTable from '@/customComponenents/users/usersTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps({
    users:Array
})



</script>

<template>


    <AuthenticatedLayout>
       <UsersTable :users="users"/>
    </AuthenticatedLayout>

</template>
