<script setup>
import primaryButton from "./primary-button.vue";
import Leftglow from "@/Components/leftglow.vue";






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
                    <div class="mt-10  portfolio-text">
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

                    <div class="mt-10  portfolio-image">
                        <img

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
.glow-left{
    visibility: hidden;
}
.portfolio-wrapper {
    position: relative;
    /* border: 3px solid yellow; */
    height: fit-content;

}

.portfolio-content {


    z-index: 1;
    margin: 16px;
    padding-top: 32px;
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
    width: 100%;
}

/* media query for large size device such as large laptops */

@media screen and (min-width:1441px) and (max-width:1920px){
    .portfolio-content {
    /* border: 4px solid blue; */


    /* height: fit-content; */
    width: screen;
    z-index: 1;
    /* position: absolute; */
    margin-left: 220px;
    margin-right: 100px;
    gap: 30px;

    display: flex;

    /* justify-content: space-between; */

}


.portfolio-image{
    /* border: 3px solid red; */
    width: 100%;

}
.portfolio-text{
    /* border: 3px solid; */
    width: 100%;
}


}

 /* media querry for medium size devices  */
@media screen and (min-width:1020px) and (max-width:1440px){
    .portfolio-content {
    /* border: 4px solid blue; */


    /* height: fit-content; */
    width: screen;
    z-index: 1;
    /* position: absolute; */
    margin-left: 220px;
    /* margin-right: 100px; */
    gap: 30px;

    display: flex;

    justify-content: space-between;

}


.portfolio-image{
    /* border: 3px solid red; */
    width: 100%;

}
.portfolio-text{
    /* border: 3px solid; */
    width: 100%;
}


}

@media screen and (min-width:800px) and (max-width:1023px){
    .portfolio-content {
    /* border: 4px solid blue; */


    /* height: fit-content; */
    width: screen;
    z-index: 1;
    /* position: absolute; */
    margin-left: 100px;
    /* margin-right: 100px; */
    gap: 30px;

    display: flex;

    justify-content: space-between;

}


.portfolio-image{
    /* border: 3px solid red; */
    width: 100%;

}
.portfolio-text{
    /* border: 3px solid; */
    width: 100%;
}

}


</style>
