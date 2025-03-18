<script setup>

defineProps(
    {
        title:String,
        description:String
    }
)

</script>

<template>
    <div class="flex justify-center">
        <div>
            <h1 class="mb-5 text-2xl font-bold md:text-center md:text-2xl mt-10">
                {{ title }}
                    <!-- Services -->
                </h1>

                   <p class="text-sm md:text-center md:text-md mb-10">
                    {{ description }}
                    <!-- We provide a wide range of services to our clients -->
                </p>

        </div>
    </div>
</template>
