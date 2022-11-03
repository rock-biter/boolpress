<template>
  <div>
    <div v-if="success"  class="bg-green-200 border border-green-400 rounded-lg px-6 py-3">
      Il messaggio è stato inviato con successo. Ti abbiamo mandato una mail di conferma. Grazie Graziella e grazie al pazzo.
    </div>
    <form v-else @submit.prevent="send" class="grid lg:grid-cols-2 gap-8">
      <p>
        <input :class="[ errors.name ? 'border-red-400' : 'border-stone-200' ,'px-2 py-2 w-full rounded-lg border']" type="text" name="name" v-model="name" placeholder="Il tuo nome">
        <small v-if="errors.name" class="flex gap-3 text-red-400 text-sm">
          <span v-for="(error,i) in errors.name" :key="i">{{ error }}</span>
        </small>
      </p>
      <p>
        <input :class="[ errors.email ? 'border-red-400' : 'border-stone-200' ,'px-2 py-2 w-full rounded-lg border']" type="email" name="email" v-model="email" placeholder="La tua email">
        <small v-if="errors.email" class="flex gap-3 text-red-400 text-sm">
          <span v-for="(error,i) in errors.email" :key="i">{{ error }}</span>
        </small>
      </p>
      <p class="col-span-2">
        <textarea :class="[ errors.message ? 'border-red-400' : 'border-stone-200' ,'px-2 py-2 w-full rounded-lg border']" v-model="message" placeholder="Il tuo messaggio..." name="message" id="" cols="30" rows="3"></textarea>
        <small v-if="errors.message" class="flex gap-3 text-red-400 text-sm">
          <span v-for="(error,i) in errors.message" :key="i">{{ error }}</span>
        </small>
      </p>

      <input class="col-span-2 bg-amber-400 w-full px-3 text-center py-2 rounded-lg" type="submit" value="invia">
    </form>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        name: '',
        email: '',
        message: '',
        errors: {},
        success: null
      }
    },
    methods: {
      send() {
        const data = {
          name: this.name,
          email: this.email,
          message: this.message
        }

        axios.post('/api/leads',data).then(() => {
          
          this.name = this.email = this.message = ''
          this.errors = {}
          this.success = true

        }).catch(err => {
          console.log(err.response)
          const { errors } = err.response.data
          this.errors = errors
        })
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>