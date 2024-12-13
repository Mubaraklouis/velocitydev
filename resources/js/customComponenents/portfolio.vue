
<script setup>
import primaryButton from './primary-button.vue';
import girlGlow from './girlGlow.vue';
import teamGlow from './team-glow.vue';
import Leftglow from '@/Components/leftglow.vue';
import Rightglow from './rightglow.vue';


</script>
<template>
  <section>

    <h1 class="mt-10 mb-10 text-4xl font-extrabold text-center text-extrabold">Our portfolio</h1>

    <div>
        <div class="portfolio-wrapper">


                <Leftglow class="glow-left"/>


            <Rightglow class="glow-right"/>


        </div>

    </div>




  </section>

</template>

<style scoped>

.portfolio-wrapper{
    position: relative;

}
.glow-left{
    position: absolute;

}
.glow-right{
    position: absolute;
    right: 0;



}



</style>
