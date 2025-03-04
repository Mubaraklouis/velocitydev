<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';

PrimaryButton

const props = defineProps({
   services:Array
})

</script>

<template>

<div >
    <div>
<!-- ✅ Grid Section - Starts Here 👇 -->
<section id="Projects"

    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <!--   ✅ Product card 1 - Starts Here 👇 -->
    <div
     v-for="service in services.data"
    :key="service.id"
     class="w-72 bg-[#f9d6d6] shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl ">
        <a href="#">
            <img :src="service.image"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">
                <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                <p class="text-lg font-bold text-black truncate block capitalize">{{ service.title }}</p>
                <div class="flex items-center">

                        <p class="text-sm text-gray-600  mt-4">{{ service.description }}</p>
                </div>
                <div class="flex items-center justify-between mt-10 mb-4">


                    <a href="" class="flex items-center text-indigo-700 border border-indigo-600 py-2 px-6 gap-2 rounded inline-flex items-center">
    <span>
        View More
    </span>
    <svg  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        viewBox="0 0 24 24" class="w-6 h-6 ml-2">
        <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
    </svg>
</a>


                </div>
            </div>
        </a>
    </div>



</section>

    </div>
</div>
</template>
