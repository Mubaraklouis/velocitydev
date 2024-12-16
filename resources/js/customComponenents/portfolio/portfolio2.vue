<template>
<section>
    <section>
        <div>
            <div class="portfolio-wrapper">
                <!-- this is the left glowing object -->
                <Leftglow class="glow-left" />
                <!-- this is the right glowing design -->
                <Rightglow class="glow-right" />
                <!-- this is the main content of the postfolio -->
                <section class="portfolio-content">

                    <div class="m-20">
                        <img
                            class="portfolio-image"
                            src="girl-image.png"
                            alt=""
                        />
                    </div>
                    <div class="mt-10 ml-20 mr-20 portfolio-text">
                        <h1 class="mt-10 mb-10 text-xl font-extrabold">
                            CCTV Camera Installation for cleints
                        </h1>
                        <div>
                            <p class="mt-10 mb-10">
                                We worked with over 150 businesses and
                                institution <br />
                                to install CCTV cameras across <br />
                                South Sudan
                            </p>
                            <primaryButton title="Read more" />
                        </div>
                    </div>


                </section>
            </div>
        </div>
    </section>
</section>
</template>
<script setup>
import primaryButton from "../primary-button.vue";
import Leftglow from "@/Components/leftglow.vue";
import Rightglow from "../rightglow.vue";
</script>

<style>
</style>
