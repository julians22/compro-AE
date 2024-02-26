<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap -mb-1">
            <template v-for="(link, p) in links" :key="p">
                <div v-if="link.url === null" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 bg-white text-gray-400 border rounded"
                    v-html="link.label" />
                <Link v-else
                    class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-red-500 focus:text-red-500"
                    :class="[link.active ? 'bg-red-500 text-white' : 'bg-slate-50 text-black']"
                    :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>
<script>
import { Link } from '@inertiajs/vue3';

    export default {
    props: {
        links: Array
    },
    components: { Link }
}
</script>
