<script setup>
import moment from 'moment';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineProps({
    notifications:Array
})


</script>

<template>

<AuthenticatedLayout>
    <div class="w-full h-full py-5 flex flex-col gap-4 items-center justify-center dark:bg-white">


<div
    class="md:text-4xl sm:text-3xl text-2xl text-center font-serif font-extrabold border-b-2 dark:border-blue-500 rounded-b-md mb-6 border-yellow-500 text-black dark:text-black">
    Notifications</div>


<div v-for="notification in notifications"

    class="sm:w-[70%] w-[94%] mx-auto dark:bg-gray-300 bg-slate-200 p-4 rounded-md flex sm:gap-4 gap-2 items-center justify-center">
    <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                    <img class="w-8" src="/contacts.png" alt="" />
                                </div>
    <div class="w-[80%] flex flex-col gap-1">
        <div class="text-lg font-semibold font-serif  dark:text-black"> {{ notification.data.client.full_name }}</div>
        <p class="text-sm dark:text-gray-600 ">{{ notification.data.client.message }}</p>
        <p class="text-[12px] text-semibold dark:text-gray-700 text-gray-700 text-right">{{moment(notification.data.client.created_at ).startOf('minute').fromNow()}}</p>
    </div>



</div>

</div>


</AuthenticatedLayout>
</template>