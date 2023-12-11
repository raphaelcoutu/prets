<script setup>
import { Link } from '@inertiajs/vue3';

defineProps(['clients']);
</script>

<template>
    <h2 class="text-2xl">Clients</h2>
    <ul>
        <li v-for="client of clients">
            <Link :href="`/clients/${client.id}/edit`">{{ client.name }}</Link>
        </li>
    </ul>
    <div class="mt-5">
        <div class="py-1.5 px-2.5 rounded bg-indigo-700 text-gray-100 inline text-sm hover:bg-indigo-800 active:bg-indigo-900">
        <Link href="/clients/create">
            Ajouter un client
        </Link>
        </div>
    </div>
</template>
