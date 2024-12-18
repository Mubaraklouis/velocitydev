<script setup>
import primaryButton from "./primary-button.vue";
import Leftglow from "@/Components/leftglow.vue";
import Rightglow from "./rightglow.vue";
</script>
<template>
    <section>
        <h1
            class="mt-10 mb-10 text-4xl font-extrabold text-center text-extrabold"
        >
            Our portfolio
        </h1>

        <div class="debug">
            <div class="portfolio-wrapper">
                <!-- this is the left glowing object -->
                <Leftglow class="glow-left" />
                <!-- this is the right glowing design -->

                <!-- this is the main content of the postfolio -->
                <section class="portfolio-content">
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

                    <div class="m-20">
                        <img
                            class="portfolio-image"
                            src="portfolio-image.png"
                            alt=""
                        />
                    </div>
                </section>
            </div>
        </div>
    </section>
</template>

<style>
.portfolio-wrapper {
    position: relative;
    /* border: 3px solid yellow; */
    height: fit-content;

}

.portfolio-content {

    z-index: 1;
    /* position: absolute; */
    /* border: 3px solid red; */

}
.glow-left {
    position: absolute;
    z-index: 0;
}
.glow-right {
    position: absolute;
    right: 0;
    z-index: 0;
}

.portfolio-image {
    object-fit: cover;
    width: 500px;
}

/* media query for large size device such as large laptops */

@media screen and (min-width:1441px) and (max-width:1920px){
    .portfolio-content {
    /* border: 4px solid blue;
    background-color: red; */

    /* height: fit-content; */
    width: 1500px;
    z-index: 1;
    /* position: absolute; */
    margin-left: 91px;
    margin-right: 91px;

    display: flex;
    justify-content: space-between;

}

}

 /* media querry for medium size devices  */
@media screen and (min-width:1020px) and (max-width:1440px){
    .portfolio-content {

/*
    height: fit-content; */
    width: screen;
    z-index: 1;
    /* position: absolute; */
    margin-left: 91px;
    margin-right: 91px;

    display: flex;
    justify-content: space-between;
}

}

/* @media screen and (min-width:800px) and (max-width:1023px){
    .portfolio-content {
    height: 100%;
    width: screen;
    z-index: 1;
    position: absolute;
    margin-left: 91px;
    margin-right: 91px;


}

} */


</style>
