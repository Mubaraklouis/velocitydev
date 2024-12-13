
<script setup>
import primaryButton from './primary-button.vue';
import girlGlow from './girlGlow.vue';



</script>
<template>
  <section>

    <h1 class="mt-10 mb-10 text-4xl font-extrabold text-center text-extrabold">Our portfolio</h1>

    <div>
        
    </div>




  </section>

</template>

<style scoped>

/* Media query for laptop screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {
    .portfolio-wrapper{
        margin-top: 20px;
        margin-bottom: 20px;
        display:grid;
        grid-template-columns: 1fr 1fr;
    }
    .girl-image{
        width:400px;
        /* height: 200px; */
    }



}


</style>
