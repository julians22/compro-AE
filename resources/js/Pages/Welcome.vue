<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PageLayout from '@/Layouts/PageLayout.vue';

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';
import { ref } from 'vue';
import { onMounted } from 'vue';
import { nextTick } from 'vue';

// init Swiper:
const swiper = ref(null);

onMounted(() => {
    nextTick();
    swiper.value = new Swiper('.swiper.swiper-home', {
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            bulletActiveClass: 'swiper-pagination-bullet-active',
            clickable: true
        },
    });
})




</script>

<template>

    <PageLayout>
        <!-- <div class="pt-4 md:pt-10">
            <div class="max-w-screen-lg w-full mx-auto">
                <img src="/img/BannerPromo.jpg" alt="Arpan Electric Promotion" class="w-full">
            </div>
        </div> -->

        <section class="relative overflow-hidden">
            <!-- <svg id="visual" class="absolute bottom-0 right-0 z-0 -scale-x-95" viewBox="0 0 900 900" width="900" height="900" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><g transform="translate(-5.279669043938782 885.5783723326715)"><path d="M538 -709.5C679.2 -637.9 763.3 -456.6 815.3 -270.9C867.4 -85.3 887.3 104.8 808.1 236C728.9 367.2 550.4 439.6 399.2 519.3C248 599 124 686 -36.9 736.7C-197.7 787.4 -395.4 801.9 -553.3 724.3C-711.1 646.8 -829.2 477.3 -847.8 303.1C-866.4 128.9 -785.6 -50.1 -698.8 -199.2C-612.1 -348.4 -519.4 -467.9 -401.9 -547.2C-284.5 -626.6 -142.2 -665.8 28.1 -704.4C198.4 -743 396.8 -781.1 538 -709.5" fill="#cb0000"></path></g></svg> -->
            <div class="py-4 px-2 lg-px-0 flex flex-col lg:flex-row items-center justify-center z-10 relative bg-white lg:bg-opacity-0">

                <div class="w-full lg:w-1/2">

                    <article class="prose prose-sm lg:prose-base prose-neutral max-w-none">
                        <h1>
                            <strong>Yuk, Temukan Solusi Elektronik Terbaik di <strong>Arpan Electric </strong>!</strong>
                        </h1>
                        <p>
                            Cari barang elektronik yang berkualitas? Datang aja ke <strong>Arpan Electric </strong> Kami punya banyak pilihan produk dari berbagai merek ternama, lho!
                            Mulai dari Kabel, Box Panel, MCB sampai ke Penangkal Petir, semua ada! Harganya juga dijamin bersahabat.
                            Bingung mau pilih yang mana? Tenang, tim kami yang ramah siap membantu kamu menemukan produk yang tepat.
                            <strong>Arpan Electric </strong> Belanja elektronik mudah dan terpercaya!
                        </p>
                        <h2>Kenapa Harus Pilih Kami?</h2>
                        <ul>
                            <li>Produk berkualitas: Kami hanya jual produk dari merek ternama yang terjamin mutunya.</li>
                            <li>Harga bersahabat: Gak perlu khawatir, harga di sini gak bikin kantong jebol.</li>
                            <li>Pelayanan ramah: Tim kami siap membantu kamu dengan sepenuh hati.</li>
                            <li>Garansi resmi: Semua produk kami bergaransi resmi, jadi kamu gak perlu ragu.</li>
                            <li>Banyak pilihan pembayaran: Bayar bisa cash, transfer, atau gesek kartu.</li>
                        </ul>
                        <p>Tunggu apa lagi? Kunjungi toko kami sekarang!</p>
                    </article>

                </div>

                <div class="w-full lg:w-1/2 h-[500px]">
                    <!-- Slider main container -->
                    <div class="swiper swiper-home">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="max-w-screen-sm w-full h-[480px] mx-auto">
                                    <img src="/img/store-1.jpg" alt="Toko Arpan Electric" class="h-full object-cover object-center w-full rounded-md">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="max-w-screen-sm w-full h-[480px] mx-auto">
                                    <img src="/img/store-2.jpg" alt="Toko Arpan Electric" class="h-full object-cover object-center w-full rounded-md">
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>

        </section>
    </PageLayout>

</template>

<style></style>
