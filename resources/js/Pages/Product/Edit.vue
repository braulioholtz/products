<script setup>
import {Head, useForm, usePage} from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import UpdateProfileInformationForm from "@/Pages/Product/Partials/UpdateProfileInformationForm.vue";

defineProps({
    name: {
        type: String,
    },
});

const product = usePage().props.product;

const form = useForm({
    name: product.name
});

</script>

<template>
    <Head title="Profile" />

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.product"
                        required
                    />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
</template>
