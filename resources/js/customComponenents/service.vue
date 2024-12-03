
<script setup>
import star from './star.vue';
import cctv from './cctv.vue';


//geting the width of the screen

const width = window.innerWidth;

console.log(width);

</script>

<template>
<section class="service-card-wrapper">

<div class="service-image-holder">
    <img class="service-card-image" src="/icons/t-shirt.png" alt="">

</div>

    <div class="service-shadow">

    </div>

    <div class="service-card">
      <div class="p-5">
        <h1>CCTV CAMERA INSTALLATION</h1>
        <p class="mt-5">We work with over 150 cleints and install cctv cameras</p>
        <div class="mt-5">
            <h1>Read more +</h1>
        </div>
      </div>
    </div>

</section>
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



/* this is the new design implementation for the */

.service-card{
background: #2E297D;
width:95%;
height: 250px;
position: absolute;
z-index: 1;
bottom: 0;
margin-bottom: 5px;
padding-top:50px ;


}

.service-card div h1{
    font-weight: 1000;
    color: white;
}
.service-card div p{
    font-size: 15px;

    color: white;
}

.service-shadow{
    width: 40%;
    background-color: #FCE2E2;
    height: 40%;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 0;

}

.service-card-wrapper{
    position: relative;
    width: 27.64%;
    height: 300px;
    border: 3px solid yellow;
    padding: 5px;

}

.service-image-holder{
    width: 30%;
    height: 30%;
    background-color: #231F60;
    border-radius: 50%;
    position: absolute;
    z-index: 2;
    margin-left: 20px;
    display: flex;
   justify-content:center;
   align-items: center;


}
.service-card-image{
    width: 50px;
    height: 50px;

}



</style>
