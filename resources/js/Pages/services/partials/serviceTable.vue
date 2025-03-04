

<script setup >
import { Link, useForm } from '@inertiajs/vue3';
import servicePagination from './servicePagination.vue';







//define the props that contents the user paginated data

const props = defineProps({
  services: Object
});

const form = useForm({
    ids:[]
})

const multipleDelete = ()=>{
    console.log(form.ids);
    form.post(route('service.multipleDelete'));
}


</script>


<template>

<div class="relative inline-block text-left z-10  mb-4">
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
            :href="route('services.create')"
            class="block text-white px-4 py-2 hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:hover:text-white"
          >
            Add service
          </Link>




          <Link as="button" href="#" @click="multipleDelete" class="block text-white px-4 py-2 hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:hover:text-white">
          Bulk Delete
          </Link>

            </div>
        </div>
    </div>
</div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-slate-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="service in services.data"
                    class="border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                               :value="service.id" v-model="form.ids"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" :src="service.image" alt="Jese image" />
                        <div class="ps-3">
                            <div class="text-base font-semibold">
                                {{ service.title }}
                            </div>
                            <div class="font-normal text-gray-500">
                                {{ service.description }}
                            </div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Technology</td>

                    <td class="px-6 py-4">
                        <Link :href="route('service.edit',service.id)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit service</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


<servicePagination :services="services" />

</template>
