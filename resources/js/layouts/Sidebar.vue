<template>
  <div>
    <Nav />
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 container ">
      <main class="col-span-3">
        
        <slot/>
        
      </main>
      <Sidebar />
    </div>
    <footer>
      qui ci mettiamo il footer
    </footer>
  </div>
</template>

<script>
import Nav from '../components/Nav.vue'
import Sidebar from '../components/Sidebar.vue'

  export default {
    components: {
      Nav,
      Sidebar
    }    
  }
</script>

<style lang="scss" scoped>

</style>