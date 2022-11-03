<template>
  <Card class="h-full">
    <template v-slot:header>
      <div v-if="post.cover" class="aspect-video bg-stone-200">
        <img class="h-full w-full object-fit object-center"
          :src="post.cover_path" alt="" />
      </div>
    </template>
  
    <article class="relative">
      
      <div class="p-4 mt-2">
        <h3 class="text-xl">{{ post.title }}</h3>
        <p v-if="post.category" class="text-amber-600 text-sm my-1">{{ post.category.name }}</p>
        <Tags :tags="post.tags" />
        
      </div>

    </article>

    <template v-slot:footer>
      <div class="flex justify-end">
        <p class="text-sm">{{ post.date }}</p>
      </div>
    </template>
  </Card>
</template>

<script>
import Tags from './Tags.vue';
import Card from './Card.vue';
  export default {
    components: {
      Tags,
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