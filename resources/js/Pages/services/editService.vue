<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
const props = defineProps({
    service: Object
});

console.log(props.service);

const form = useForm({
    title:props.service.title,
    description:props.service.description,
    image: null,
});

const submit = () => {
    form.put(route("service.update",props.service.id), {});
};
</script>
<template>
    <AuthenticatedLayout>
        <h1 class="text-4xl font-extrabold text-extrabold text-center">
            Update a service
        </h1>
        <section class="contact-section-wrapper pt-20">
            <div
                class="contact-form w-[80%] mx-auto bg-white shadow-md p-10 border-1 rounded-md"
            >
                <form @submit.prevent="submit">
                    <div class="w-[100%]">
                        <!-- this is the file section -->

                        <div
                            class="flex items-center justify-center w-full mb-4"
                        >
                            <label
                                for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
                            >
                                <div
                                    class="flex flex-col items-center justify-center pt-5 pb-6"
                                >
                                    <svg
                                        class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 20 16"
                                    >
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                                        />
                                    </svg>
                                    <p
                                        class="mb-2 text-sm text-gray-500 dark:text-gray-400"
                                    >
                                        <span class="font-semibold"
                                            >Click to upload</span
                                        >
                                        or drag and drop
                                    </p>
                                    <p
                                        class="text-xs text-gray-500 dark:text-gray-400"
                                    >
                                        SVG, PNG, JPG or GIF (MAX. 800x400px)
                                    </p>
                                </div>
                                <input
                                    @input="form.image = $event.target.files[0]"
                                    id="dropzone-file"
                                    type="file"
                                    class="hidden"
                                />
                            </label>
                        </div>

                        <InputError class="mt-2" :message="form.errors.title" />
                        <TextInput
                            id="name"
                            type="text"
                            class="w-[100%] mb-4 text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                            placeholder="Enter Title....."
                            v-model="form.title"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        <label
                            for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white "
                            >Description</label
                        >
                        <textarea
                        id="email"
                            type="email"

                            placeholder="Enter Description....."
                            v-model="form.description"
                            required
                            autofocus
                            autocomplete="name"
                            class="text-black text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none block p-2.5 w-full text-sm  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "

                        ></textarea>

                        <div></div>
                        <InputError
                            class="mt-2"
                            :message="form.errors.description"
                        />
                        <!-- <TextInput class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75" type="text" placeholder="Enter Full Name....."/> -->
                        <!-- <TextInput
                            id="email"
                            type="email"
                            class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                            placeholder="Enter Description....."
                            v-model="form.description"
                            required
                            autofocus
                            autocomplete="name"
                        /> -->
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
