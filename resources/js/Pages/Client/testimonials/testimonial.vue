
<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SuccessAlert from '@/customComponenents/successAlert.vue';

const form = useForm({
    name:'',
    title:'',
    message:'',
    image:null
});


const submit = ()=>{
    form.post(route('testimonial.store'));
    form.reset()
}

</script>
<template>
    <GuestLayout>




        <section class="contact-section-wrapper pt-10">
            <h1
                class="mt-20 ml-10 mb-10 text-4xl font-extrabold text-extrabold"
            >
            Share Your Experience!
            </h1>
            <section
                class="contact-wrapper-border contact-info-wrapper relative w-[100%] mx-auto"
            >
                <div
                    class="contact-connect-section connect-border p-4 bg-[#CFACAC] h-60 relative overflow-visible w-[80%] mx-auto rounded-lg shadow-md"
                >
                    <h1 class="font-extrabold text-xl">
                        Love Hearing
                        <span class="block w-full"> From You</span>
                    </h1>

                    <!-- This is the line -->
                    <div class="ml-10 mt-2 w-40 h-1 bg-[#000000]"></div>

                    <div class="mt-4 flex justify-between relative w-full">
                        <img
                            class="w-20 h-32 object-cover mt-10 z-10"
                            src="/lightning.png"
                            alt=""
                        />
                        <img
                            class="w-1/3 h-20 object-cover rounded-lg"
                            src="/contact-py.png"
                            alt=""
                        />
                        <img
                            class="w-1/3 h-20 object-cover rounded-lg"
                            src="/contact-im.png"
                            alt=""
                        />
                    </div>
                </div>

                <div class="contact-form w-[80%] mx-auto">
            <SuccessAlert v-if="$page.props.flash.success" :message="$page.props.flash.success "/>

                    <form @submit.prevent="submit">

                        <div class="flex items-center justify-center w-full">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-[#CFACAC] opacity-75 mb-4 dark:hover:bg-gray-800 dark:bg-gray-700  dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input
                                    @input="form.image = $event.target.files[0]"
                                    id="dropzone-file"
                                    type="file"
                                    class="hidden"
                                />
    </label>
</div>


                        <div class="w-[100%] flex gap-2">
                            <InputError
                                class="mt-2"
                                :message="form.errors.name"
                            />
                            <TextInput
                                id="name"
                                type="text"
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75"
                                placeholder="Enter Full Name....."
                                v-model="form.name"
                                required
                                autofocus
                                autocomplete="name"
                            />

                            <div></div>
                            <InputError
                                class="mt-2"
                                :message="form.errors.title"
                            />
                            <!-- <TextInput class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75" type="text" placeholder="Enter Full Name....."/> -->
                            <TextInput
                                id="title"
                                type="text"
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75"
                                placeholder="Enter Your Title....."
                                v-model="form.title"
                                required
                                autofocus
                                autocomplete="name"
                            />
                        </div>
                        <div class="w-[100%] flex gap-2 mt-4">
                            <!-- <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75" type="text" placeholder="Enter Company.."> -->
                            <textarea
                                id="message"
                                type="text"
                                class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75"
                                placeholder="Enter message ...."
                                v-model="form.message"
                                required

                            />

                            <!-- <input class="w-[100%] text-bold text-sm placeholder-gray-800 bg-[#CFACAC] rounded-lg border-none opacity-75 " type="text" placeholder="Enter Phone...."> -->
                        </div>
                        <div class="w-[100%] mt-4">



                    </div>

                        <div class="mt-4 flex justify-between">
                            <div class="flex items-center">
                                <div>
                                    <input
                                        id="link-checkbox"
                                        type="checkbox"
                                        value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    />
                                    <label
                                        for="link-checkbox"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >I agree with the
                                        <a
                                            href="#"
                                            class="text-blue-600 dark:text-blue-500 hover:underline"
                                            >terms and conditions</a
                                        >.</label
                                    >
                                </div>
                            </div>

                            <PrimaryButton> Submit </PrimaryButton>
                        </div>
                    </form>
                </div>
            </section>
        </section>
    </GuestLayout>
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
