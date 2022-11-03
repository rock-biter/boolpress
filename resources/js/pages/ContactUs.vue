<template>
  <div>
    <section class="pt-20">
      <div class="container">
        <h1>Contatti</h1>
        <p>Compila il form per contattarci...</p>
      </div>
    </section>
    <section>
      <div class="container py-12">
        <LeadForm>
        </LeadForm>
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