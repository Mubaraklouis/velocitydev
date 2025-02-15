<script setup lang="ts">
import UsersTable from '@/customComponenents/users/usersTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
// Define the structure of a user
interface User {
    id: number;
    name: string;
    email: string;
    created_at: string;
}



interface PaginatedData {
    data: User[];
    links: PaginationLink[]; // Array of pagination links
    meta: {
        current_page: number;
        from: number;
        last_page: number;
        path: string;
        per_page: number;
        to: number;
        total: number;
        links?: PaginationLink[]; // Optional nested links for Laravel's pagination
    };
}

// Define the structure of the paginated data
interface PaginationLink {
    url: string | null;
    label: string;
    active: boolean;
}
defineProps<{
    users: PaginatedData; // Ensure `users` is required and matches the `PaginatedData` interface
}>();

</script>

<template>


    <AuthenticatedLayout>
       <UsersTable :users="users"/>
    </AuthenticatedLayout>

</template>
