
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

                <section class="portfolio-content">
                    hello am portfolioa



                </section>


        </div>

    </div>




  </section>

</template>

<style scoped>

.portfolio-wrapper{
    position: relative;
    border: 3px solid red;
    height: 500px;

}
.glow-left{
    position: absolute;
    z-index: 0;

}
.glow-right{
    position: absolute;
    right: 0;
    z-index: 0;



}
.portfolio-content{
    border: 4px solid blue;
    background-color: red;




    height: 100%;
    width: 1500px;
    z-index: 1;
    position: absolute;
    margin-left: 91px;
    margin-right: 91px;


}



</style>
