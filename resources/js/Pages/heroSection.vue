<script setup lang="ts">
import Glow from '@/customComponenents/glow.vue';
import PrimaryButton from '@/customComponenents/primary-button.vue';


</script>

<template>


<section class="hero-section">


    <div class="hero-section-wrapper">



        <!-- this is the hero section text and header -->

        <div class=" hero-section-text">
            <h1 class="font-extrabold text-3xl text-[#093228] mt-10 mb-10">
            Design Your Dream
        </h1>

        <div>
            <p class="hero-text">
                Get custom T-shirts and Eye-catching flyers and More!
                elevate your brand with custom Tees,Graphic Design and Trading solutions
            </p>

        <Glow/>

        </div>
        <div class="mt-10">
              <PrimaryButton title="Explore More"/>
            </div>
        </div>

        <div class=" hero-section-text">

            <div>
    <div>
        <img src="/icons/Ellipse.png" alt="">
    </div>
</div>
        </div>

    </div>


</section>
</template>

<style scoped>

.hero-section{
    background-image: linear-gradient(180deg, #FCE2E2, 80%,#2E297D);
}
.hero-text{
    font-family: "Abel", sans-serif;
}
.hero-section-wrapper{

    padding: 30px;

}
.glow{
    z-index: 1;


}



/* Media query for laptop screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {

    .hero-section-wrapper{
     display: flex;
     justify-content: space-between;


}
.hero-section-text{
    width: 500px;
}

.hero-section-wrapper{
    padding: 60px;

}

}

</style>
