<script setup>
import primaryButton from '../primary-button.vue';

</script>

<template>
    <section class="portfolio2-wrapper">
        <!-- this is the image of portfolio section two -->

        <div class="portfolio2-image mt-10">
            <!-- <img  src="girl-glow.png" alt=""> -->
            <img class="girl-image" src="girl-image.png" alt="" />
        </div>

        <!-- this is the text discription of portfolio section two -->
        <div class="portfolio2-discription mt-10 mb-10">
         <div>
            <h1 class="mt-10 mb-10 text-xl font-extrabold">
                We exclusively design modern ux
            </h1>
            <div>
                <p class="mt-10 mb-10">
                    Welcome to Malga where modern design meet <br>
                    exceptional user expriences we don’t
                    <br> design websites we craft digital experience
                </p>
                <primaryButton title="Read more" />
            </div>
         </div>
        </div>
    </section>
</template>

<style scoped>
/* Default design for all small devices */

.portfolio2-wrapper {
    width: screen;
    /* border: 2px solid green; */
    margin-left: 16px;
    margin-right: 16px;
}

.portfolio2-image {
    /* border: 3px solid yellow; */
    height: fit-content;
}

.portfolio2-discription {
    /* border: 3px solid red; */
    height: 500px;
}
/* media querry for large devices such as large laptops */

@media screen and (min-width: 1441px) and (max-width: 1920px) {
    .portfolio2-wrapper {
        display: flex;
        width: screen;
        /* border: 2px solid green; */
        height: fit-content;
        margin-left: 100px;
        margin-right: 100px;
        gap: 30px;
    }

    .portfolio2-image {
        position: relative;
        /* border: 3px solid yellow; */
        height: fit-content;
        width: 100%;
    }

    .portfolio2-discription {
        /* border: 3px solid red; */
        width: 100%;
        height: fit-content;
    }

    .girl-image{
        width: 400px;
        height: 400px;
        object-fit: cover;
    }
}

@media screen and (min-width: 1020px) and (max-width: 1440px) {
    .portfolio2-wrapper {
        width: screen;
        /* border: 2px solid green; */
        height: fit-content;
        margin-left: 91px;
        margin-right: 91px;
    }
}
</style>
