<template>
    <!-- Pagination -->
    <nav class="mt-10 justify-center" aria-label="Page navigation">
        <ul class="inline-flex -space-x-px text-sm">
            <li v-for="(link, index) in services.links" :key="index">
                <Link
                    :href="link.url || '#'"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 border border-gray-300 bg-[#fff2f2]  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    :class="{
                        'bg-blue-50 text-blue-600 hover:bg-blue-100 hover:text-blue-700': link.active,
                        'rounded-l-lg': index === 0,
                        'rounded-r-lg': index === services.links.length - 1,
                    }"
                    preserve-state
                >
                    <span v-html="link.label"></span>
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    services: Array
})

</script>

