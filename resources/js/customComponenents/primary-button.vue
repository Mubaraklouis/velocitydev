<template>
            <!-- working on the primary button -->
             <div class="primary-button">
                {{ title }}
             </div>

</template>

<style scoped>
.primary-button{
    background-color:var(--secondaryColor);
    color:#fff;
    padding:10px 30px;
    width:fit-content;
    border-radius:20px;

}

</style>
<script setup>


defineProps({
    title:String
})

</script>
