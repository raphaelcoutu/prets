<script setup>
import MainMenu from './MainMenu.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <div class="md:flex md:flex-col">
            <div class="md:flex md:flex-col md:h-screen">
                <div class="md:flex md:flex-shrink-0">
                    <div
                        class="flex items-center justify-between px-6 py-4 bg-blue-950 md:flex-shrink-0 md:justify-center md:w-56">
                        <Link class="mt-1 h-8 text-white" href="/">
                            LOGO
                        </Link>
                    </div>
                    <div
                        class="md:text-md flex items-center justify-between p-4 w-full text-sm bg-white border-b md:px-12 md:py-0">
                        <div class="mr-4 mt-1 font-semibold text-xl">Prêts & Emprunts</div>
                    </div>
                </div>
                <div class="md:flex md:flex-grow md:overflow-hidden">
                    <MainMenu class="hidden flex-shrink-0 p-12 w-56 bg-indigo-900 overflow-y-auto md:block" />
                    <div class="px-4 py-8 md:flex-1 md:p-12 md:overflow-y-auto" scroll-region>
                        <div class="hidden">Flash-Message</div>
                        <slot />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
