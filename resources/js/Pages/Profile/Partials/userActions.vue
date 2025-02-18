<script setup>
import { Link } from '@inertiajs/vue3';


</script>

<template>
<div class="relative inline-block text-left z-10 ">
    <div class="group">
        <button type="button"
            class="inline-flex justify-center items-center w-full px-4 py-2 text-sm font-medium text-white bg-[#7971E7] rounded-md rounded-md focus:outline-none focus:bg-gray-700">
            Actions
            <!-- Dropdown arrow -->
            <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div
            class="absolute left-0 w-40 mt-1 origin-top-left bg-[#7971E7] text-white p-4 divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
            <div class="py-1">
                <Link
            :href="route('user.create')"
            class="block text-white px-4 py-2 hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:hover:text-white"
          >
            Add User
          </Link>
          <Link
             @click="multipleDelete"
            class="block text-white px-4 py-2 hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:hover:text-white"
          >
          Bulk Delete
          </Link>
          <Link
          href="#"

            class="block text-white px-4 py-2 hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:hover:text-white"
          >
            Assign Role
          </Link>
            </div>
        </div>
    </div>
</div>
</template>
