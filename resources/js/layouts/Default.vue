<template>
  <div class="flex min-h-screen flex-col">
    <Nav />
    <main class="py-20 grow">
      <slot />
    </main>
    <Footer />
  </div>
</template>

<script>
import Nav from '../components/Nav.vue';
import Footer from '../components/Footer.vue'
  export default {
    components: {
      Nav,
      Footer,
    }
    
  }
</script>

<style lang="scss" scoped>

</style>