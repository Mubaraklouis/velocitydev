<script setup lang="ts">
import DangerButton from '@/Components/DangerButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { nextTick, ref } from 'vue';

const confirmingUserDeletion = ref(false);
const emailInput = ref<HTMLInputElement | null>(null);

const props = defineProps({
    id:Number
})

const form = useForm({

    email: '',
    id:props.id
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;

    nextTick(() => emailInput.value?.focus());
};

const deleteUser = () => {
    form.delete(route('user.delete',form.id), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => emailInput.value?.focus(),
        onFinish: () => {
            form.reset();
        },
    });
};

const closeModal = () => {
    confirmingUserDeletion.value = false;

    form.reset();
};
</script>

<template>
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">Delete Account</h2>

            <p class="mt-1 text-sm text-gray-600">
                Once this account is deleted, all of its resources and data will be permanently deleted. Before deleting
                your account, please download any data or information that you wish to retain.
            </p>
        </header>

        <DangerButton @click="confirmUserDeletion">Delete Account</DangerButton>

        <Modal :show="confirmingUserDeletion" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900">
                    Are you sure you want to delete your account?
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    Once your account is deleted, all of its resources and data will be permanently deleted. Please
                    enter your password to confirm you would like to permanently delete your account.
                </p>

                <div class="mt-6">

                    <InputError :message="form.errors.email" class="mt-2" />
                </div>

                <div class="mt-6">
                    <InputLabel for="email" value="email" class="sr-only" />

                    <TextInput
                        id="email"
                        ref="emailInput"
                        v-model="form.email"
                        type="email"
                        class="mt-1 block w-3/4"
                        placeholder="email"
                        @keyup.enter="deleteUser"
                    />

                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>

                    <DangerButton
                        class="ms-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteUser"
                    >
                        Delete Account
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </section>
</template>
