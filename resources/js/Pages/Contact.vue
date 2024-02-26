<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import PageLayout from '@/Layouts/PageLayout.vue';
import { reactive } from 'vue';


const form = useForm({
    full_name: null,
    email: null,
    phone: null,
    subject: "quotation"
})

const submit = () => {
    form.post(route('contact-us.store'),{
        preverseScroll: true,
        onSuccess: function () {
            alert('Berhasil mengirim pesan');
            form.reset();
        }
    });
}

</script>

<template>
    <Head title="Hubungi Kami" />

    <PageLayout>
        <div class="pb-10">
            <div class="pt-10 pb-4">
                <h1 class="text-center font-bold text-4xl text-gray-600">Hubungi Kami</h1>
            </div>

            <div class="flex flex-col-reverse md:flex-row">
                <div class="bg-red-950 text-white w-full md:w-2/5 px-7 py-6">
                    <div class="mb-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.087951467459!2d106.84415889126572!3d-6.19171767518356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f579790eb949%3A0xfc2b7892517a7da9!2sArpan%20Electric!5e0!3m2!1sid!2sid!4v1707061113489!5m2!1sid!2sid" width="800" height="800" style="border:0; width: 100%;" class="h-96" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <table class="text-left">
                        <tr class="align-top">
                            <th>Nomor Hp.</th>
                            <td class="px-4">:</td>
                            <td>
                                <ul class="mb-2">
                                    <li><a href="tel:+62812-8743-0066" class="hover:underline underline-offset-2">0812-8743-0066</a></li>
                                    <li><a href="tel:+622129923166" class="hover:underline underline-offset-2">(021) 29923166</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Marketplace</th>
                            <td class="px-4">:</td>
                            <td>
                                <ul>
                                    <li><a href="https://tokopedia.link/ggRmvcDisHb" class="hover:underline underline-offset-2" target="_blank" rel="noopener noreferrer">Tokopedia</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr></tr>
                    </table>
                </div>

                <div class="bg-white shadow w-full md:w-3/5 px-7 py-6">
                    <h2 class="text-center font-bold text-2xl md:text-4xl text-gray-600 mb-2">Formulir Kontak</h2>
                    <p class="text-center">Silahakan isi form dibawah untuk menghubungi kami melalui e-mail, setelah mengisi form kami akan memproses permintaan kamu segera ⚡.</p>

                    <div>
                        <form @submit.prevent="submit">
                            <div class="grid grid-cols-1 gap-y-2">
                                <div class="flex flex-col space-y-1">
                                    <label for="full_name">Nama Lengkap</label>
                                    <input type="text" id="full_name" :class="{'border-red-500' : form.errors.full_name != null}" required v-model="form.full_name">
                                    <div class="text-sm text-white bg-red-400 rounded px-2 inline w-auto" v-if="form.errors.full_name">{{ form.errors.full_name }}</div>
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <label for="email">Email (Opsional)</label>
                                    <input type="email" id="email" v-model="form.email">
                                    <div class="text-sm text-white bg-red-400 rounded px-2 inline w-auto" v-if="form.errors.email">{{ form.errors.email }}</div>
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <label for="phone">Nomor Hp.</label>
                                    <input type="text" id="phone" required v-model="form.phone">
                                    <div class="text-sm text-white bg-red-400 rounded px-2 inline w-auto" v-if="form.errors.phone">{{ form.errors.phone }}</div>
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <label for="subject">Jenis Permintaan</label>
                                    <select id="subject" v-model="form.subject" required :class="{'border-red-500': form.errors.subject != null}">
                                        <option value="quotation">Penawaran</option>
                                        <option value="visit">Kunjungi Toko</option>
                                        <option value="error">Error M</option>
                                    </select>
                                    <div class="text-sm text-white bg-red-400 rounded px-2 inline w-auto" v-if="form.errors.subject">{{ form.errors.subject }}</div>
                                </div>

                                <div>
                                    <button type="submit" class="rounded bg-red-500 text-white shadow px-2 py-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </PageLayout>

</template>

<style></style>
