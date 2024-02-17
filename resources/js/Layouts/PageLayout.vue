<script setup>

import { Link } from '@inertiajs/vue3';
import NavLink from '@/Components/NavLink.vue';
import { ref } from 'vue';

const isOpen = ref(false);

</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <div class="container mx-auto flex md:flex-row flex-col md:space-x-5 py-2 relative">

                    <div class="ml-1 md:ml-0">
                        <Link :href="route('welcome')">
                            <img src="/img/logo.jpg" alt="Arpan Electric" width="320" class="max-w-56 md:max-w-56 w-full h-auto">
                        </Link>
                    </div>

                    <div class="w-5 h-4 flex cursor-pointer flex-col justify-between md:hidden absolute right-2 top-0 mt-4 z-10" @click="isOpen = !isOpen">
                        <div class="h-0.5 bg-black duration-500"></div>
                        <div class="h-0.5 bg-black duration-500"></div>
                        <div class="h-0.5 bg-black duration-500"></div>
                    </div>

                    <!-- Menu List -->
                    <ul
                        class="flex-col md:flex-row md:items-center items-start text-base mt-3 md:mt-0 space-y-1 md:space-y-0 space-x-0 md:space-x-4 ml-1 md:ml-0"
                        :class="[isOpen ? 'flex' : 'hidden md:flex']">
                        <li class="w-full md:w-auto">
                            <NavLink href="#">
                                <span class="text-lg">Produk</span>
                            </NavLink>
                        </li>
                        <li class="w-full md:w-auto">
                            <NavLink :href="route('contact-us')" :active="route().current('contact-us')">
                                <span class="text-lg">Hubungi Kami</span>
                            </NavLink>
                        </li>
                        <li class="w-full md:w-auto">
                            <div class="w-full md:w-72">
                                <div class="relative w-full">
                                    <input type="text" class="px-2 py-0.5 rounded w-full focus:outline-none focus:ring-red-400 focus:border-red-400" placeholder="Cari Produk">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>

            <div class="container mx-auto">
                <slot/>
            </div>
        </div>
    </div>
</template>
