<script setup lang="ts">

import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

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


<GuestLayout>



        <section class="contact-section-wrapper pt-20 ">
    <h1
            class="mt-20 ml-10 mb-10 text-4xl font-extrabold  text-extrabold"
        >
            Register
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
        <TextInput
                    id="name"
                    type="text"
                    class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75"  placeholder="Enter Full Name....."
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />
        <!-- <TextInput class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75" type="text" placeholder="Enter Full Name....."/> -->
        <TextInput
                    id="name"
                    type="text"
                    class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75"  placeholder="Enter Email....."
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />
     </div>
     <div class="w-[100%] flex gap-2 mt-4 ">
        <!-- <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75" type="text" placeholder="Enter Company.."> -->
        <TextInput
                    id="password_confirmation"
                    type="password"
                    class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75 "  placeholder="Enter Password ...."
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />
                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75 "  placeholder="Comfirm Password ...."
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

        <!-- <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75 " type="text" placeholder="Enter Phone...."> -->
     </div>
     <div class="w-[100%]  mt-4 ">


  <select id="countries" class="bg-[#CFACAC] opacity-75 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>Choose account type</option>
    <option value="US">Client</option>
    <option value="CA">Bloger</option>
    <!-- <option value="FR">France</option>
    <option value="DE">Germany</option> -->
  </select>


  <div class="mt-10 grid space-y-4">
                            <button
                                class=" w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75  h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                                        class="absolute left-0 w-5" alt="google logo">
                                    <span
                                        class="block w-max font-semibold tracking-wide text-gray-700 dark:text-white text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue
                                        with Google
                                    </span>
                                </div>
                            </button>
                            <button
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75  h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="absolute left-0 w-5 text-gray-700" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                                        </path>
                                    </svg>
                                    <span
                                        class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition dark:text-white duration-300 group-hover:text-blue-600 sm:text-base">Continue
                                        with Github
                                    </span>
                                </div>
                            </button>
                        </div>

     </div>

     <div class="mt-4 flex justify-between" >


<div class="flex items-center">


<div>
    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</a>.</label>
</div>






</div>

<PrimaryButton>
        Submit
    </PrimaryButton>



     </div>
    </div>
</section>


 </section>


</GuestLayout>


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
