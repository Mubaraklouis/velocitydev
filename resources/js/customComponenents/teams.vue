    <template>
        <h1 class="mt-4 text-4xl font-extrabold text-center my-10">
            Meet Our Team
        </h1>
        <div class="ml-16  my-10">

            <Glow/>
            <div class="team-wrapper">
                <Team/>
                <Team/>
                <Team/>

            </div>

        </div>


    </template>

    <script setup>
import Glow from './glow.vue';
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
