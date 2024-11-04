<script setup lang="ts">
import primaryButton from './primary-button.vue';
</script>
<template>
    <nav class="m-10">
        <div class="flex justify-between">
            <div>
         <h1 class="text-3xl font-bold">MALGA</h1>
            </div>


            <div class="menu-mobile-visibility">
        <ul class="flex font-extrabold gap-4 ">
            <li class="font-extrabold">
                Home
            </li>
            <li>
                About
            </li>
            <li>
                Contact
            </li>
            <li>
                Features
            </li>
        </ul>
       </div>
            <div class="primary-btn-visibility">
<primaryButton title="Subscribe"/>
            </div>

       <div class="hidden laptop-size flex  bg-[#0c093d] absolute  items-center w-full h-[50vh] top-20 left-0 text-white justify-center font-bold">
        <ul class="grid grid-cols-1 gap-6 items-center">
                <li class="text-bold">
                    Home
                </li>
                <li>
                    About
                </li>   <li class="text-bold">
                Contact
            </li>   <li class="text-bold">
                Features
            </li>
                <li class="text-bold">
                    Pages
                </li>
                <div>
                    <primaryButton title="Subscribe"/>
                </div>
            </ul>
       </div>

       <div class="hand-menu">
        <img class="bars-size" src="/icons/bars.png" alt="">
       </div>

        </div>

    </nav>
</template>


<style scoped>

@media (min-width: 1024px) and (max-width: 1440px) {
.laptop-size{
    display: none;
}
.hand-menu{
    display:none;
}

}

@media (max-width: 768px){
.primary-btn-visibility{
    display: none;
}
.menu-mobile-visibility{
display:none;
}
}
.logo-size{
    width:150px;
    height: 150px;
}
.bars-size{
    width:20px;
    height:20px;
}
.mobile-main-margins{
    margin:20px;
}
.logo-size{
    width:35px;
    height: 105px;

}
</style>
