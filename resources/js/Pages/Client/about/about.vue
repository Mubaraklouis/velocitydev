<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
defineProps(
    {
        content:String
    }
)


</script>

<template>

    <GuestLayout>
<div class="sm:flex items-center max-w-screen-xl mt-32">
    <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
            <img src="https://i.imgur.com/WbQnbas.png">
        </div>
    </div>
    <div class="sm:w-1/2 p-5">
        <div class="text">
            <span class="text-gray-500 border-b-2 border-indigo-600 uppercase">About us</span>
            <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-indigo-600">Malga South Sudan</span>
            </h2>

            <div v-for="content in content" >
                <p v-html="content.content" class="text-gray-700">
            </p>
            </div>

        </div>
    </div>
</div>
</GuestLayout>
</template>
