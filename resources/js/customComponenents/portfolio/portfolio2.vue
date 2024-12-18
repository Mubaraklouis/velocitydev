<script setup></script>

<template>
    <section class="portfolio2-wrapper">

        <!-- this is the image of portfolio section two -->

        <div class="portfolio2-image">

        </div>

        <!-- this is the text discription of portfolio section two -->
         <div class="portfolio2-discription">

         </div>

        <div>

        </div>

    </section>
</template>

<style scoped>

/* Default design for all small devices */

.portfolio2-wrapper {
        width: screen;
        border:  2px solid green;
        margin-left: 16px;
        margin-right: 16px;
    }

    .portfolio2-image{
        border: 3px solid yellow;
        height: 500px;

    }

    .portfolio2-discription{
        border: 3px solid red;
        height: 500px;

    }
/* media querry for large devices such as large laptops */

@media screen and (min-width: 1441px) and (max-width:1920px) {
    .portfolio2-wrapper {
        width: screen;
        border:  2px solid green;
        height: fit-content;
        margin-left: 91px;
        margin-right: 91px;
    }

}

@media screen and (min-width: 1441px) and (max-width:1920px) {
    .portfolio2-wrapper {
        width: screen;
        border:  2px solid green;
        height: fit-content;
        margin-left: 91px;
        margin-right: 91px;
    }

}
@media screen and (min-width: 1020px) and (max-width:1440px) {
    .portfolio2-wrapper {
        width: screen;
        border:  2px solid green;
        height: fit-content;
        margin-left: 91px;
        margin-right: 91px;
    }

}
</style>
