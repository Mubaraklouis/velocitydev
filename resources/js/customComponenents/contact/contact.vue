<script setup>

</script>

<template>
 <section class="contact-section-wrapper">
    <h1
            class="mt-10 mb-10 text-4xl font-extrabold  text-extrabold"
        >
            Contact
        </h1>
    <section class="contact-wrapper-border">
        <div class="contact-connect-section connect-border">
            connect with us
        </div>

        <div>
            contact form
        </div>
    </section>
 </section>
</template>

<style>



/* Media query for laptop medium size  screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {
.contact-section-wrapper{
    margin-left: 200px;
    margin-right: 200px;

}

.contact-wrapper-border{
    border:2px solid red
}

}

/* Media querry for large size laptop screen */
@media screen and (min-width: 1441px) and (max-width: 1920px) {
    .contact-section-wrapper{
    margin-left: 200px;
    margin-right: 200px;





}

.contact-wrapper-border{
    border:2px solid red
}
.connect-border{
    border:2px solid  blue

}

}

/* media query for tablet size and large mobile phones */
@media screen and (min-width: 800px) and (max-width: 1023px) {

}

</style>
