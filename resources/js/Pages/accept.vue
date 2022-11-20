<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';
import {ref} from "vue";


</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Accept
            </h2>
        </template>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 text-center">
                        <strong class="text-2xl lg:text-3xl">Hujan</strong>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto expedita fugit dolorem corrupti. Aspernatur, officiis eos. Reprehenderit hic ipsam, cupiditate delectus ducimus laboriosam magni dignissimos. Blanditiis rerum architecto porro vitae. Itaque reiciendis eum illum unde nesciunt adipisci ipsam est corrupti consectetur, fugit labore libero ipsa ducimus qui aspernatur error enim! Aut perspiciatis dicta odit explicabo, obcaecati illo laudantium! Est fugit itaque eius maiores natus officiis ipsa exercitationem repellendus, asperiores, accusamus similique voluptas quos! Veritatis molestias fugit, dolorum deserunt neque non, beatae velit aut animi magnam quo architecto magni commodi possimus qui quos sunt labore adipisci, itaque voluptas quidem illo? Repudiandae.
                            <br>
                            <button type="submit" class="bg-gray-700 text-white px-2 py-1 rounded mt-5 hover:bg-gray-600 transition">Accept</button>    
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
