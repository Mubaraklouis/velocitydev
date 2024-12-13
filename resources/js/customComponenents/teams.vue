    <template>
    <div class="relative">

        <h1 class="mt-4 text-4xl font-extrabold text-center my-10">
            Meet Our Team
        </h1>

        <teamGlow class="absolute z-0"/>
        <teamButtomGlow class="absolute z-0 right-0 button-0" />
        <div class="ml-16 ">


            <div  class="team-wrapper ">
                <Team class="z-10"/>
                <Team/>
                <Team class="z-10"/>

            </div>

        </div>


    </div>
    </template>

    <script setup>
import teamGlow from './team-glow.vue';
import teamButtomGlow from './team-buttom-glow.vue';
import Team from './team.vue';


</script>

<style>





</style>
