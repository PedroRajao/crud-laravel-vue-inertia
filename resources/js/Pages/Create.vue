<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
  title: "",
  author: "",
  content: "",
});
</script>

<template>
  <form @submit.prevent="form.post('/post')">
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
      <textarea v-model="form.content"></textarea>
    </div>

    <!-- submit -->
    <button type="submit" :disabled="form.processing">Create New Post</button>
  </form>
</template>