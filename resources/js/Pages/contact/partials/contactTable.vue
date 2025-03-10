<script setup >
import { Link } from '@inertiajs/vue3';
import pagination from '@/customComponenents/pagination/pagination.vue'
import moment from 'moment';
import {useForm} from '@inertiajs/vue3';



//define the props that contents the user paginated data

const props = defineProps({
  contacts: Object
});

const form = useForm({
    ids:[]
})


</script>


<template>


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
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Accout Type</th>
                    <th scope="col" class="px-6 py-3">Last Seen</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="contact in contacts.data"
                    class="border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" :value="user.id" v-model="form.ids"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" :src="user.profile_picture" alt="Jese image" />
                        <div class="ps-3">
                            <div class="text-base font-semibold">
                                {{ user.name }}
                            </div>
                            <div class="font-normal text-gray-500">
                                {{ user.email }}
                            </div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Blogger</td>
                    <td v-if="user.last_seen" class="px-6 py-4">{{moment(user.last_seen).startOf('minute').fromNow()}}</td>
                    <td v-else class="px-6 py-4">Never active</td>

                    <td class="px-6 py-4">
                        <div v-if="user.isOnline" class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                           online

                        </div>
                        <div v-else-if="user.last_seen == null" class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-gray-500 me-2"></div>
                          inactive
                        </div>

                        <div v-else="user.last_seen == null" class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                           offline
                        </div>

                    </td>
                    <td class="px-6 py-4">
                        <Link :href="route('user.edit',user.id)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<pagination :users="users"/>
</template>
