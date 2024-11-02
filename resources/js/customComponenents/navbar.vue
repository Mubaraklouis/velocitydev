<script setup lang="ts">
import primaryButton from './primary-button.vue';
</script>
<template>
    <nav class="mobile-main-margins">
        <div class="flex justify-between">
            <div>
          MALGA
            </div>
       <div class="hidden">
        <ul>
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
            </ul>
       </div>

       <div>
        <img class="bars-size" src="/icons/bars.png" alt="">
       </div>
            <div class="hidden">
<primaryButton title="Subscribe"/>
            </div>

        </div>

    </nav>
</template>
<style scoped>
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
