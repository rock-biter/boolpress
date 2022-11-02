<template>
  <component v-if="layout" :is="layout" >
    <router-view></router-view>
  </component >
</template>

<script>
  export default {
    data() {
      return {
        layout: null
      }
    },
    methods: {
      matchLayout() {
        const layout = this.$route.meta.layout

switch(layout) {
  case 'sidebar': 
    this.layout = () => import('../layouts/Sidebar.vue')
    break
  default:
    this.layout = () => import('../layouts/Layout.vue')
}
      }
    },
    watch: {
      $route() {
        this.matchLayout()
      }
    },
    created() {
      this.matchLayout()
    }
  }
</script>

<style lang="scss" scoped>

</style>