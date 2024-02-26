<script setup>
import PageLayout from '@/Layouts/PageLayout.vue';
import Navigation from "@/Components/Product/Navs/Navigation.vue";
import { Head } from '@inertiajs/vue3';
import MarketplaceIcon from '@/Components/MarketplaceIcon.vue';
import Pagination from '@/Components/Product/Pagination.vue';

defineProps({
    categories: Object,
    products: Object
});

</script>

<template>

    <PageLayout>

        <Head title="Produk Kami" />

        <section>
            <div class="flex flex-col-reverse lg:flex-row justify-between py-5">

                <div class="w-full lg:w-1/5 pl-2 pr-2 lg:pl-0 lg:pr-0">
                    <Navigation :categories="categories"/>
                </div>

                <div class="lg:w-4/5 pl-2 pr-2 lg:pl-4 lg:pr-0 flex flex-col space-y-4">
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-y-2 gap-x-0 lg:gap-y-4 lg:gap-x-4 w-full auto-rows-fr">
                        <div class="bg-white shadow rounded" v-for="product in products.data" :key="product.id">
                            <img :src="product.thumbnail" :alt="product.name" width="180" height="180" class="aspect-square object-cover object-top w-full">

                            <div class="p-3">
                                <h5>{{ product.name }}</h5>
                                <div class="text-sm text-slate-400" v-if="product.links.length > 0">
                                    Beli Sekarang
                                    <div class="flex mt-1">
                                        <a class="w-7" :href="link.url" v-for="link in product.links" target="_blank">
                                            <MarketplaceIcon :type="link.marketplace"/>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div>
                        <Pagination :links="products.links" />
                    </div>
                </div>

            </div>
        </section>

    </PageLayout>
</template>
