<script setup>
import Glow from '@/customComponenents/glow.vue';
import PrimaryButton from '@/customComponenents/primary-button.vue';
import SuccessAlert from '@/customComponenents/successAlert.vue';
import { usePage ,Link} from '@inertiajs/vue3';
// Access the success message from the page props





</script>

<template>





<section class="ml-10 hero-section-wrapper  mt-32 ">


   <div>


    <div class="items-center w-10/12 grid-cols-2 mx-auto overflow-x-hidden lg:grid md:py-14 lg:py-24 xl:py-14 lg:mt-3 xl:mt-5" data-aos="fade-right" data-aos-duration="800">
          <div class="pr-2 md:mb-14 py-14 md:py-0">
            <h1 class="text-3xl font-semibold text-blue-900 xl:text-5xl lg:text-3xl"><span class="block w-full">Design Your Dream !</span></h1>
            <p class="py-4 text-lg text-gray-500 2xl:py-8 md:py-6 2xl:pr-5">
                Get custom T-shirts and Eye-catching flyers and More!
                elevate your brand with custom Tees,Graphic Design and Trading solutions
            </p>
            <div class="mt-4">
            <Link href="/services">
                <PrimaryButton title="Explore More"/>
            </Link>
            </div>



 <SuccessAlert v-if="$page.props.flash.success" :message="$page.props.flash.success "/>
          </div>

          <div class="pb-10 overflow-hidden md:p-10 lg:p-0 sm:pb-0">
            <img id="heroImg1" class="transition-all duration-300 ease-in-out hover:scale-105 lg:w-full sm:mx-auto sm:w-4/6 sm:pb-12 lg:pb-0" src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/hero-img.png" alt="Awesome hero page image" width="500" height="488"/>
          </div>
        </div>



   </div>




</section>
</template>

<style scoped>

/* Media query for laptop medium size  screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {
    .hero-section-wrapper {
        width: screen;


        margin-left: 91px;
        margin-right: 91px;

        display: flex;
    }
}

/* Media querry for large size laptop screen */
@media screen and (min-width: 1441px) and (max-width: 1920px) {
    .hero-section-wrapper {
        width: screen;
        display: flex;
        justify-content: space-between;


        margin-left: 230px;
        margin-right: 230px;
    }
}

/* media query for tablet size and large mobile phones */
@media screen and (min-width: 800px) and (max-width: 1023px) {
    .hero-section-wrapper {
        width: screen;

        margin-left: 91px;
        margin-right: 91px;
    }
}

.hero-text{
    font-family: "Abel", sans-serif;
}



</style>
