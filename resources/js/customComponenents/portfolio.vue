
<script setup>
import primaryButton from './primary-button.vue';
import girlGlow from './girlGlow.vue';



</script>
<template>
  <section>

    <h1 class="mt-10 mb-10 text-4xl font-extrabold text-center text-extrabold">Our portfolio</h1>


    <div class="portfolio-wrapper">

        <div class="mt-10 ml-20 mr-20 portfolio-text">

        <h1 class="mt-10 mb-10 text-xl font-extrabold">CCTV Camera Installation for cleints</h1>
        <div>

            <p class="mt-10 mb-10">
                We worked with over 150 businesses and institution <br> to install  CCTV cameras across <br> South Sudan
            </p>
            <primaryButton title="subscribe"/>


        </div>
    </div>

    <div class="m-10 portfolio-image">
        <img src="portfolio-image.png" alt="">

    </div>



    </div>
    <div class="portfolio-wrapper">

     <section>
        <div class="m-10 mt-10 mb-10 portfolio-image relative">
            <girlGlow class="absolute z-0 button-20 right-20"/>

        <img class="girl-image z-10 absolute top-7" src="girl-image.png" alt="">

    </div>
     </section>

<section>

    <div class="mt-10 ml-20 mr-20 portfolio-text">
        <h1 class="mt-10 mb-10 text-xl font-extrabold">We exclusively design modern ux </h1>
        <div>
            <p class="mt-10 mb-10">
                Welcome to Malga where modern design meet <br>
                exceptional user expriences we don’t just design <br>
                 we craft digital experience
            </p>
            <primaryButton title="subscribe"/>


        </div>
    </div>
</section>
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
