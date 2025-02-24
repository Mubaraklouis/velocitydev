<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("user.store"), {
        onFinish: () => {
            form.reset("password", "password_confirmation");
        },
    });
};


</script>

<template>

    <AuthenticatedLayout>
        <h1
                class="text-4xl font-extrabold text-extrabold text-center"
            >
                Register
            </h1>
<section class="contact-section-wrapper pt-20">



                <div class="contact-form w-[80%] mx-auto bg-white shadow-md p-10 border-1 rounded-md">
                    <form @submit.prevent="submit">
                        <div class="w-[100%] flex gap-2">
                            <InputError
                                class="mt-2"
                                :message="form.errors.name"

                            />
                            <TextInput
                                id="name"
                                type="text"
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                                placeholder="Enter Full Name....."
                                v-model="form.name"
                                required
                                autofocus
                                autocomplete="name"
                            />

                            <div></div>
                            <InputError
                                class="mt-2"
                                :message="form.errors.email"

                            />
                            <!-- <TextInput class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75" type="text" placeholder="Enter Full Name....."/> -->
                            <TextInput
                                id="email"
                                type="email"
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                                placeholder="Enter Email....."
                               v-model="form.email"
                                required
                                autofocus
                                autocomplete="name"
                            />
                        </div>
                        <div class="w-[100%] flex gap-2 mt-4">
                            <!-- <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75" type="text" placeholder="Enter Company.."> -->
                            <TextInput
                                id="password"
                                type="password"
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                                placeholder="Enter Password ...."
 v
                                required
                                autocomplete="new-password"
                                v-model="form.password"
                            />
                            <TextInput
                                id="password_confirmation"
                                type="password"
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                                placeholder="Comfirm Password ...."
                                v-model="form.password_confirmation"

                                required
                                autocomplete="new-password"
                            />

                            <!-- <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75 " type="text" placeholder="Enter Phone...."> -->
                        </div>
                        <div class="w-[100%] mt-4">
                            <select
                                id="countries"
                                class="bg-gray-200 opacity-75 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option selected>Choose account type</option>
                                <option value="US">Client</option>
                                <option value="CA">Bloger</option>
                                <!-- <option value="FR">France</option>
    <option value="DE">Germany</option> -->
                            </select>

                            <div class="mt-10 grid space-y-4">
                                <button
                                    class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75 h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                >
                                    <div
                                        class="relative flex items-center space-x-4 justify-center"
                                    >
                                        <img
                                            src="https://www.svgrepo.com/show/475656/google-color.svg"
                                            class="absolute left-0 w-5"
                                            alt="google logo"
                                        />
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 dark:text-white text-sm transition duration-300 group-hover:text-blue-600 sm:text-base"
                                            >Continue with Google
                                        </span>
                                    </div>
                                </button>
                                <button
                                    class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75 h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                >
                                    <div
                                        class="relative flex items-center space-x-4 justify-center"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            class="absolute left-0 w-5 text-gray-700"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"
                                            ></path>
                                        </svg>
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition dark:text-white duration-300 group-hover:text-blue-600 sm:text-base"
                                            >Continue with Github
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-between">


                            <PrimaryButton> Submit </PrimaryButton>
                        </div>
                    </form>
                </div>
            </section>


    </AuthenticatedLayout>

</template>
<style>

/* Media query for laptop medium size  screens */
@media screen and (min-width: 1024px) and (max-width: 1440px) {
    .contact-section-wrapper {
        margin-left: 200px;
        margin-right: 200px;
    }
}

/* Media querry for large size laptop screen */
@media screen and (min-width: 1441px) and (max-width: 1920px) {
    /* this code section content the design of the website */

    .contact-section-wrapper {
        margin-left: 200px;
        margin-right: 200px;
    }

    .contact-info-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .contact-form {
        grid-column: 2 / span 3;
    }
}

/* media query for tablet size and large mobile phones */
@media screen and (min-width: 768px) and (max-width: 1023px) {
    .contact-form {
        margin-top: 100px;
    }
}
@media screen and (max-width: 768px) {
    /* Styles for mobile devices */

    .contact-form {
        margin-top: 50px;
    }
}

</style>
