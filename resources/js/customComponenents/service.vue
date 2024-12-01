
<script setup>
import star from './star.vue';
import cctv from './cctv.vue';

</script>

<template>
<div class="relative">


<!-- <div class="image-wrapper">

</div> -->

<div class="service-shadow  absolute z-0">

</div>

<div class="bg-[#2E297D]    text-white  p-10 service-card">
    <div class="image-wrapper">
        <div class="service-image">
            <cctv/>


        </div>

</div>

                <h1 class="mb-6 font-bold mt-6 ">CCTV CAMERA INSTALLATION</h1>
                <div>
                    <p class="service-text">
                        We work with over 150 clients and install cctv cameras
                    </p>
        <div class="flex gap-4 mt-6">
            <h1 class="mt-6 text-sm font-extrabold">Read More +</h1>


            <div class="flex gap-1 mt-4">
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
    width:200px;
}
.service-card{
    width:392px;
height: 352px;
}
.service-shadow{
    width:392px;
    height: 352px;
    background-color: #C4C4C4;
}



</style>
