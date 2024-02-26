<script setup>

defineProps({
    type: String
})

</script>

<template>

    <div class="relative aspect-square w-full">
        <img src="/img/icons/tokopedia-seeklogo.png" alt="" v-if="type === 'tokopedia'" class="w-full h-full object-center object-cover">
        <img src="/img/icons/shopee-seeklogo.png" alt="" v-if="type === 'shopee'" class="w-full h-full object-center object-cover">
    </div>

</template>

<style>
</style>
