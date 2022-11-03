<template>
  <div class="shadow-xl divide-y divide-stone-400 flex flex-col rounded-lg overflow-hidden w-full bg-stone-100">
    <header>
      <slot name="header" />
    </header>
    <div class="px-6 py-3 grow">
      <slot />
    </div>
    <footer class="py-3 px-6 bg-stone-200">
      <slot name="footer"/>
    </footer>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>

</style>