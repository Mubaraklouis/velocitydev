<script setup lang="ts">
import primaryButton from './primary-button.vue';
</script>
<template>
    <nav class="mobile-main-margins">
        <div class="flex justify-between">
            <div>
          MALGA
            </div>


            <div class="menu-mobile-visibility">
        <ul class="flex text-bold gap-4 ">
            <li class="text-extrabold">
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

       <div class=" laptop-size flex  bg-[#0c093d] absolute  items-center w-full h-[50vh] top-20 left-0 text-white justify-center font-bold">
        <ul class="grid grid-cols-1 gap-6 items-center">
                <li>
                    Home
                </li>
                <li>
                    About
                </li>   <li>
                Contact
            </li>   <li>
                Features
            </li>
                <li>
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
    width:50px;
    height:50px;
}
.mobile-main-margins{
    margin:20px;
}
</style>
