<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';

PrimaryButton

const props = defineProps({
   projects:Array
})

</script>

<template>

<div >
    <div>
<!-- ✅ Grid Section - Starts Here 👇 -->
<section id="Projects"

    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-10 gap-x-8 mt-10 mb-5">


    <div
     v-for="project in projects.data"
    :key="project.id"
     class="bg-[#fceded] relative flex flex-col my-2 shadow-sm border border-slate-200 rounded-lg w-96">
  <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
    <img :src="project.image" alt="card-image" />
  </div>
  <div class="p-4">
    <h6 class="mb-2 text-slate-800 text-xl font-semibold">
        {{ project.title }}
    </h6>
    <p class="text-slate-600 leading-normal font-light">
        {{ project.description }}
    </p>
  </div>
  <div class="px-4 pb-4 pt-0 mt-2">
    <button class="rounded-md bg-blue-900 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Read more
    </button>
  </div>
</div>


</section>

    </div>
</div>



</template>
