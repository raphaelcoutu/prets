<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: null,
    banner: null,
})

const submit = () => {
    form.post('/clients')
}
</script>

<template>
    <h2>Clients</h2>

    <form @submit.prevent="submit">
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="form.name">
        <div v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</div>
        <button type="submit">Sauvegarder</button>
    </form>

</template>
