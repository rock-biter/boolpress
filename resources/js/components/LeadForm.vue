<template>
  <div>
    <div class="text-lg p-2 bg-green-200 border border-green-300 rounded-lg" v-if="success">
      Grazie di averci contattato. Risponderemo il prima possibile.
    </div>
    <form v-else @submit.prevent="send" class="grid grid-cols-2 gap-6">

<p>
  <input :class="[errors.name ? 'border-red-400' : 'border-stone-200','rounded-lg px-2 py-2 border  w-full']" type="text" name="name" v-model="name" placeholder="Nome">
  <small v-if="errors.name" class="flex gap-3 text-red-400">
    <span v-for="(error,i) in errors.name" :key="i">{{ error }}</span>
  </small>
</p>

<p>
  <input :class="[errors.name ? 'border-red-400' : 'border-stone-200','rounded-lg px-2 py-2 border  w-full']" type="email" v-model="email" name="email" placeholder="Email">
  <small v-if="errors.email" class="flex gap-3 text-red-400">
    <span v-for="(error,i) in errors.email" :key="i">{{ error }}</span>
  </small>
</p>

<p class="col-span-2">
  <textarea :class="[errors.name ? 'border-red-400' : 'border-stone-200','rounded-lg px-2 py-2 border  w-full']" name="message" v-model="message" placeholder="Il tuo messaggio" cols="30" rows="4"></textarea>
  <small v-if="errors.message" class="flex gap-3 text-red-400">
    <span v-for="(error,i) in errors.name" :key="i">{{ error }}</span>
  </small>
</p>

<p class="col-span-2">
  <input :class="{
    'cursor-pointer w-full bg-amber-400 hover:bg-amber-300 px-4 py-2 uppercase rounded-lg': true,
    'opacity-30 pointer-events-none': !isValid,
    'animate-pulse': sending
  }" type="submit" :value="sending? 'waiting' : 'invia'">
</p>



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
        success: null,
        sending: false,
      }
    },
    computed: {
      isValid() {
        return this.name && this.message && this.email
      }
    }, 
    methods: {
      send() {

        if(!this.isValid) {
          return
        }

        this.sending = true

        axios.post('/api/leads',{
          name: this.name,
          email: this.email,
          message: this.message
        }).then(() => {
          this.name = this.message = this.email = ''
          this.errors = {}
          this.success = true
        }).catch(err => {
          this.errors = err.response.data.errors
          console.log(this.errors)
        }).finally(() => {
          this.sending = false
        })
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>