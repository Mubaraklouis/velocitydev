<template>
    <!-- Pagination -->
    <nav class="mt-10" aria-label="Page navigation">
        <ul class="inline-flex -space-x-px text-sm">
            <li v-for="(link, index) in users.links" :key="index">
                <Link
                    :href="link.url || '#'"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    :class="{
                        'bg-blue-50 text-blue-600 hover:bg-blue-100 hover:text-blue-700': link.active,
                        'rounded-l-lg': index === 0,
                        'rounded-r-lg': index === users.links.length - 1,
                    }"
                    preserve-state
                >
                    <span v-html="link.label"></span>
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

// Define the structure of a user
interface User {
    id: number;
    name: string;
    email: string;
    created_at: string;
}

// Define the structure of a pagination link
interface PaginationLink {
    url: string | null;
    label: string;
    active: boolean;
}

// Define the structure of the paginated data
interface PaginatedData {
    data: User[];
    links: PaginationLink[];
    meta: {
        current_page: number;
        from: number;
        last_page: number;
        path: string;
        per_page: number;
        to: number;
        total: number;
    };
}

// Define props
const props = defineProps<{
    users: PaginatedData;
}>();
</script>
