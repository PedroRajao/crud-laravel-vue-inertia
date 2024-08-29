<template>
    <div class="container mx-auto pt-5">
      <!-- Loop pelos posts -->
      <div class="post_block" v-for="post in posts" :key="post.id">
        <h2>{{ post.title }}</h2>
        <p>{{ post.author }}</p>
        <Link :href="`/post/${post.id}`"> Read More </Link><br>
        <Link :href="`/post/edit/${post.id}`"> Edit post </Link>
      </div>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  import { Link } from '@inertiajs/vue3';
  
  defineProps({
    posts: Array // Definimos que "posts" será uma lista/array de objetos
  });
  </script>
  
  <style scoped>
  /* Exemplo de estilos */
  .post_block {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
  }
  
  h2 {
    font-size: 1.5em;
  }
  
  p {
    color: #555;
  }
  </style>
  