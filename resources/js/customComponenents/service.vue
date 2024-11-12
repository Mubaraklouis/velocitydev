
<script setup>
import star from './star.vue';
import cctv from './cctv.vue';

</script>

<template>
<div>


<!-- <div class="image-wrapper">

</div> -->

<div class="bg-[#2E297D]  m-4  text-white  p-4 service-card">
    <div class="image-wrapper">
        <div class="service-image">
            <cctv/>


        </div>

</div>

                <h1 class="mb-4 font-bold ">CCTV CAMERA INSTALLATION</h1>
                <div>
                    <p class="service-text">
                        We work with over 150 clients and install cctv cameras
                    </p>
        <div class="flex gap-4">
            <h1 class="mt-4 text-sm font-extrabold">Read More +</h1>


            <div class="flex gap-1 mt-4">
                <star/>
                <star/>
                <star/>
                <star/>
                <star/>


            </div>
        </div>
                </div>

            </div>
</div>
</template>

<style>
.image-wrapper{
    display: flex;
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 10px;


}
.service-image{
    background:#231F60;
    width:100px;
    height:100px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius:50%;

}
.service-text{
    font-size:14px;
}



</style>
