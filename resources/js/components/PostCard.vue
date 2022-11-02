<template>
  <Card class="h-full">
    <template v-slot:header>
      <img v-if="post.cover" :src="post.cover_path" alt="" class="h-full w-full object-cover object-center">
    </template>

    <article class="relative rounded-lg overflow-hidden">
      
      <h3 class="text-xl">{{ post.title }}</h3>
      <div class="mt-2">
        <p v-if="post.category" class="text-amber-600 text-sm my-1">{{ post.category.name }}</p>
      </div>
      <ul class="flex gap-4 py-3">
        <li class="rounded-full hover:bg-amber-400 bg-gray-200 px-2 py-1 text-xs" v-for="tag in post.tags" :key="tag.id">{{ tag.name }}</li>
      </ul>

    </article>

    <template v-slot:footer>
      <div class="flex justify-end items-center">
        
        <p class="text-sm">{{ post.date }}</p>
      </div>
    </template>
  </Card>
</template>

<script>
import Card from './Card.vue';
  export default {
    components: {
      Card,
    },
    props: {
      post: {
        type: Object,
        required: true
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>