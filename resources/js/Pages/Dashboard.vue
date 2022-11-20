<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
import { Head,Link } from '@inertiajs/inertia-vue3';
import {ref} from "vue";

const input = ref({
  search: ""
});

const recommendations = ref([
{title: "Matematika Dasar arit matika bangun datar matrik pelajaran kelas smp asd sada das as as das dsad asd asd asdas das das dasd asdasd "},
{title: "Malam-malam kau ingin berkebun?"},
{title: "Malam-malam kau ingin berkebun?"},
{title: "Malam-malam kau ingin berkebun?"},
{title: "Malam-malam kau ingin gelud?"},
]);
console.log(recommendations.value[0].title.length);
</script>

<template>
  <Head title="Dashboard" />
  
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form @submit="">
          <input type="text" name="search" class="rounded-full m-auto block border border-gray-500 text-center py-2 w-5/12" placeholder="Cari Ujian" v-on:keypress.enter.prevent="add" v-model="input.search">
        </form>
        <!-- <p>{{input.search}}</p> -->
        <br>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200 px-20">
            <!-- <Link href="hai" >hai</Link> -->
            <div>
              <h1 class="text-lg">Rekomendasi Ujian</h1>
              <br>
              <vueper-slides
              class="no-shadow"
              :visible-slides="3"
              slide-multiple
              :gap="3"
              :slide-ratio="1 / 4"
              :dragging-distance="200"
              :breakpoints="{ 800: { visibleSlides: 2, slideMultiple: 2 } }">
              <vueper-slide v-for="(recommendation,index) in recommendations" :key="index">
                <template #content>
                  <Link href="/recommendation/{{index}}">
                    <div class="p-4 rounded text-center ">
                    <div class="max-h-24 text-ellipsis overflow-hidden m-auto">
                      <strong class="max-h-6" :class="[recommendation.title.length < 15?'text-xl':recommendation.title.length<30?'text-lg':recommendation.title.length<45?'text-md':'text-sm']">{{ recommendation.title }}</strong>
                    </div>
                    <br>
                    <div class="grid grid-cols-2">
                      <div>
                        <img src="https://awsimages.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90" alt="" class="w-12 h-12 rounded-full m-auto">
                        <small>Rizky Julian Ricaldy</small>
                      </div>
                      <div>
                        <span class="material-symbols-outlined text-4xli">
                          star
                        </span>
                        <br>
                        <strong >3.1</strong>
                      </div>
                    </div>
                  </div>
                  </Link>
                </template>
              </vueper-slide>
            </vueper-slides>
          </div>
        </div>
      </div>
      <br>
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <!-- <Link href="hai" >hai</Link> -->
          <div>
            <h1 class="text-lg">List Ujian</h1>
            <div class="rounded flex grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1">
              <div v-for="i in 50" class="pt-2 px-2">
                <Link href="accept">
                  <div class="rounded-full border bodrder-gray-900 w-full py-2 px-2 flex hover:bg-gray-100 cursor-pointer" >
                    <div class="w-2/12">
                      <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="w-12 h-12 rounded-full mr-7">
                    </div>
                    <div class="w-10/12">
                      <strong>Matematika Dasar SD</strong>
                      <br>
                      <small class="w-10/12 float-left">Rizky Julian Ricaldy</small> 
                      <span class="material-symbols-outlined float-left">
                        star
                      </span>
                      <strong >3.1</strong>
                    </div>
                  </div>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</AuthenticatedLayout>
</template>
