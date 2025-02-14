<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation');
        },
    });
};
</script>

<template>
    <!-- <GuestLayout>
        <Head title="Register" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full bg-[#FCE2E2]"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full bg-[#FCE2E2]"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full bg-[#FCE2E2]"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full bg-[#FCE2E2]"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout> -->




    <section class="contact-section-wrapper">
    <h1
            class="mt-10 ml-10 mb-10 text-4xl font-extrabold  text-extrabold"
        >
            Contact
        </h1>
        <section class="contact-wrapper-border contact-info-wrapper relative w-[100%] mx-auto">
    <div class="contact-connect-section connect-border p-4 bg-[#CFACAC] h-60 relative overflow-visible w-[80%] mx-auto rounded-lg shadow-md">
        <h1 class="font-extrabold text-xl">
            Connect with <span class="block w-full">the founders</span>
        </h1>

        <!-- This is the line -->
        <div class="ml-10 mt-2 w-40 h-1 bg-[#000000]"></div>

        <div class="mt-4 flex justify-between relative w-full">
            <img class="w-20 h-32 object-cover mt-10 z-10" src="/lightning.png" alt="">
            <img class="w-1/3 h-20 object-cover rounded-lg " src="/contact-py.png" alt="">
            <img class="w-1/3 h-20 object-cover rounded-lg  " src="/contact-im.png" alt="">
        </div>
    </div>

    <div class="contact-form w-[80%] mx-auto ">
     <div class="w-[100%] flex gap-2 ">
        <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75" type="text" placeholder="Enter Full Name.....">
        <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75 " type="text" placeholder="Enter Email....">
     </div>
     <div class="w-[100%] flex gap-2 mt-4 ">
        <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75" type="text" placeholder="Enter Company..">
        <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75 " type="text" placeholder="Enter Phone....">
     </div>
     <div class="w-[100%]  mt-4 ">


  <select id="countries" class="bg-[#CFACAC] opacity-75 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>Choose a country</option>
    <option value="US">United States</option>
    <option value="CA">Canada</option>
    <option value="FR">France</option>
    <option value="DE">Germany</option>
  </select>

        <input class=" h-20 w-[100%] text-bold text-xsm placeholder-gray-800 bg-[#CFACAC] mt-4 rounded-lg border-none opacity-75" type="text" placeholder="Start typing..">




     </div>

     <div class="mt-4 flex justify-between" >


<div class="flex items-center">
    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</a>.</label>
</div>

<PrimaryButton title="Send"/>

     </div>
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


}

/* Media querry for large size laptop screen */
@media screen and (min-width: 1441px) and (max-width: 1920px) {

    /* this code section content the design of the website */

.contact-section-wrapper{
    margin-left: 200px;
    margin-right: 200px;

}

.contact-info-wrapper{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

.contact-form{
    grid-column: 2 / span 3;
}

}

/* media query for tablet size and large mobile phones */
@media screen and (min-width: 768px) and (max-width: 1023px) {
    .contact-form{
        margin-top: 100px;

    }

}
@media  screen and (max-width: 768px) {
    /* Styles for mobile devices */

    .contact-form{
        margin-top: 50px;


    }
}

</style>
