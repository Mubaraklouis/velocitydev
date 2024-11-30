    <template>
    <div>

        <h1 class="mt-4 text-4xl font-extrabold text-center my-10">
            Meet Our Team
        </h1>

        <teamGlow/>
        <div class="ml-16  my-10">


            <div class="team-wrapper">
                <Team/>
                <Team/>
                <Team/>

            </div>

        </div>


    </div>
    </template>

    <script setup>
import teamGlow from './team-glow.vue';
import Team from './team.vue';


</script>

<style>


.team-wrapper{
    display:grid;
grid-template-columns: 1fr 1fr 1fr;
}

/* making the site reponsive for mobile size */

@media (max-width: 768px) {
.team-wrapper{
    display:grid;


}


}


</style>
