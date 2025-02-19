<script setup lang="ts">
import UsersTable from '@/customComponenents/users/usersTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';



defineProps({
    users: Object // Ensure `users` is required and matches the `PaginatedData` interface
});
</script>

<template>
    <AuthenticatedLayout>
       <UsersTable :users="users" />
    </AuthenticatedLayout>
</template>
