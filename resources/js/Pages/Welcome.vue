<script setup lang="ts">

import Navbar from "@/customComponenents/navbar.vue";
import heroSection from "./heroSection.vue";
import Services from "@/customComponenents/services.vue";
import Portfolio from "@/customComponenents/portfolio.vue";
import Teams from "@/customComponenents/teams.vue";
import portfolio2 from "@/customComponenents/portfolio/portfolio2.vue";
import team from "@/customComponenents/Team/team.vue";

</script>
<template>
    <section class="mainSection">
        <!-- <navbar/>
        <hero-section/> -->
        <Services/>

        <div class="grid grid-cols-1 justify-center">
            <Portfolio/>
        <portfolio2/>
        <team/>

        </div>


    </section>

</template>
<style>
/*here is all the variable that will be used globally in the project*/
*{
    margin:0;
    padding: 0;
}

:root{
    --primaryColor:#FCE2E2;
    --secondaryColor:#363092;
    --inputColor:#CFACAC;
    --mediumScreenMargin:3.75rem 0,7.5rem 7.5rem;
}

body{
    background-color: var(--primaryColor);
}
/* .mainSection{
    margin:3.75rem;
} */

/* here is where all the code belonging the fonts of the website  */
/* mobile margin  */



</style>


