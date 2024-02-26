<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  categories: Object,
})

</script>

<template>
    <div class="bg-white p-4 rounded">
        <nav class="prose prose-headings">
            <h3>Pilih Kategori Produk</h3>
            <div class="flex flex-col space-y-1">
                <div>
                    <Link :href="route('product.index')">Semua Produk</Link>
                </div>
                <div v-for="category in categories">
                    <Link
                        :href="route('product.index', {category: category.slug})">
                        {{ category.title }}
                    </Link>
                </div>
            </div>
        </nav>
    </div>
</template>
