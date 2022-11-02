<template>
  <div>
    <Nav />
    <slot />
    <footer>
      <div class="container">

        qui ci mettiamo il footer
      </div>
    </footer>
  </div>
</template>

<script>
import Nav from '../components/Nav.vue'

  export default {
    components: {
      Nav
    }    
  }
</script>

<style lang="scss" scoped>

</style>