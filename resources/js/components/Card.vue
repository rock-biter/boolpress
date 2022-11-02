<template>
  <div class="divide-y divide-y-stone-200 shadow-lg rounded-lg flex flex-col">
    <header class="bg-stone-200 aspect-video">
      <slot name="header" />
    </header>
    <div class="py-3 px-6 grow">
      <slot />
    </div>
    <footer class="py-3 px-6">
      <slot name="footer" />
    </footer>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>

</style>