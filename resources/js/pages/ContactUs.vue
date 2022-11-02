<template>
  <div>
    <section>
      <div class="container">
        <h1>Contatti</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <LeadForm />
      </div>
    </section>
  </div>
</template>

<script>

import LeadForm from '../components/LeadForm.vue';
  export default {
    components: {
      LeadForm
    }
  }
</script>

<style lang="scss" scoped>

</style>