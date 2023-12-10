<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps(['client'])

const form = useForm({
    name: props.client.name,
    banner: props.client.banner,
})

const submit = () => {
    form.put(`/clients/${props.client.id}`)
}
</script>

<template>
    <h2>Clients</h2>

    <form @submit.prevent="submit">
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="form.name">
        <div v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</div>

        <label for="banner">Banner:</label>
        <input type="text" id="banner" v-model="form.banner">
        <div v-if="form.errors.banner" class="text-red-500">{{ form.errors.banner }}</div>
        <button type="submit">Sauvegarder</button>
    </form>
</template>
