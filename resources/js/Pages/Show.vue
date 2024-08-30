<template>
  <div class="container mx-auto pt-5">
    <h1>{{ post.title }}</h1>
    <p>{{ post.author }}</p>

    <div>
      {{ post.content }}
    </div>
    <br>
    
    <!-- Back -->
    <div>
      <button type="button">
        <Link href="/"> Back </Link>
      </button>
    </div>

  </div>
</template>

<script setup>
import { defineProps } from "vue";
import { Link } from "@inertiajs/vue3";


defineProps({
  post: Object,
});
</script>