<script setup lang="ts">

import Navbar from "@/customComponenents/navbar.vue";
</script>
<template>
    <section class="mainSection">
        <navbar/>
    </section>
</template>
<style>
/*here is all the variable that will be used globally in the project*/

:root{
    --primaryColor:#FCE2E2;
    --secondaryColor:#363092;
    --inputColor:#CFACAC;
    --mediumScreenMargin:3.75rem 0,7.5rem 7.5rem;
}
body{
    background-color: var(--primaryColor);
}
.mainSection{
    margin:3.75rem;
}
</style>


