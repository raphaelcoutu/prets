<script setup>
import { Link } from '@inertiajs/vue3'

defineProps(['clients'])
</script>

<template>
    <h2>Clients</h2>
    <ul>
        <li v-for="client of clients">
            <Link :href="`/clients/${client.id}/edit`">{{ client.name }}</Link>
        </li>
    </ul>
</template>
