<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    title: "",
    description: "",
});

const submit = () => {
    form.post(route("service.store"), {
    });
};
</script>
<template>
    <AuthenticatedLayout>
        <h1 class="text-4xl font-extrabold text-extrabold text-center">
            Add Service
        </h1>
        <section class="contact-section-wrapper pt-20">
            <div
                class="contact-form w-[80%] mx-auto bg-white shadow-md p-10 border-1 rounded-md"
            >
                <form @submit.prevent="submit">
                    <div class="w-[100%] flex gap-2">
                        <InputError class="mt-2" :message="form.errors.title" />
                        <TextInput
                            id="name"
                            type="text"
                            class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                            placeholder="Enter Title....."
                            v-model="form.title"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        <div></div>
                        <InputError class="mt-2" :message="form.errors.description" />
                        <!-- <TextInput class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75" type="text" placeholder="Enter Full Name....."/> -->
                        <TextInput
                            id="email"
                            type="email"
                            class="w-[100%] text-bold text-sm placeholder-gray-800 bg-gray-200 rounded-lg border-none opacity-75"
                            placeholder="Enter Description....."
                            v-model="form.description"
                            required
                            autofocus
                            autocomplete="name"
                        />
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
