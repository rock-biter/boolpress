<template>
  <div v-if="post">
    <section class="aspect-video bg-stone-100 relative flex items-end">
      <img v-if="post.cover_path" class="h-full absolute top-0 left-0 w-full object-fit object-center" :src="post.cover_path" alt="">
      <div class="container relative z-20 pb-20">
        <h1 class="text-2xl text-amber-400 mb-6">{{ post.title }}</h1>
      </div>
    </section>
    <section class="py-10">
      <div class="container">
        <h4>{{ post.category?.name }}</h4>
        <Tags :tags="post.tags" />
      </div>
    </section>
    <section>
      <div class="container" v-html="post.content">

      </div>
    </section>
  </div>
</template>

<script>
import Tags from '../components/Tags.vue'
  export default {
    components: {
      Tags
    },
    props: ['slug'],
    data() {
      return {
        post: null
      }
    },
    methods: {
      fetchPost() {
        axios.get(`/api/posts/${this.slug}`).then(res => {
          const { post } = res.data
          this.post = post
        }).catch((err) => {
          const { status } = err.response
          if(status === 404) {
            this.$router.replace({ name: '404'})
          }
        })
      }
    },
    created() {
      this.fetchPost()
    }
  }
</script>

<style lang="scss" scoped>

</style>