<template>
  <!-- <div> -->
  <div class="container mx-auto pt-5">
    
    <form @submit.prevent="form.put(`/post/update/${post.id}`)">
      <div>
        Título
        <input type="text" v-model="form.title" />
      </div>
      <div>
        Autor
        <input type="text" v-model="form.author" />
      </div>
      <div>
        Conteúdo
        <textarea v-model="form.content" rows="10" cols="50"></textarea>
      </div>
      <br />

      <!-- submit -->
      <div>
        <button type="submit" :disabled="form.processing">Update Post</button>
      </div>      
      <button type="button">
        <Link href="/"> Back </Link>
      </button>
    </form>

  </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import { defineProps } from "vue";
import { Link } from "@inertiajs/vue3";

let props = defineProps({
  post: Object,
});

const form = useForm({
  title: props.post.title,
  author: props.post.author,
  content: props.post.content,
});
</script>
