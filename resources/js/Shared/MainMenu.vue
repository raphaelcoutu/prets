<script setup>
import { Link } from '@inertiajs/vue3';
import { addIcons, OhVueIcon as VIcon } from 'oh-vue-icons';
import { HiCurrencyDollar, HiUserGroup, HiViewBoards } from 'oh-vue-icons/icons/hi';

addIcons(HiViewBoards, HiUserGroup, HiCurrencyDollar);
</script>

<template>
    <div>
        <div class="mb-4">
            <Link href="/" class="flex py-2 text-indigo-300 items-center" :class="{'active' : $page.url === '/'}">
                <v-icon name="hi-view-boards" class="mr-2 w-6 h-6" />
                <div>Accueil</div>
            </Link>
        </div>
        <div class="mb-4">
            <Link href="/clients" class="flex py-2 text-indigo-300 items-center"
                  :class="{'active' : $page.url.startsWith('/clients')}">
                <v-icon name="hi-user-group" class="mr-2 w-6 h-6" />
                <div>Clients</div>
            </Link>
        </div>

        <div class="mb-4">
            <Link href="/clients" class="flex py-2 text-indigo-300 items-center"
                  :class="{'active' : $page.url.startsWith('/transactions')}">
                <v-icon name="hi-currency-dollar" class="mr-2 w-6 h-6" />
                <div>Transactions</div>
            </Link>
        </div>
    </div>
</template>

<style>
.active {
    @apply text-white
}
</style>
