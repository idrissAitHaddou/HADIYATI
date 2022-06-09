<template>

  <div class="bg-body-color">
    <NavbarComponent />
    <template v-if="$store.state.role!='admin'">
        <Footer />
    </template>
  </div>
  
</template>

<script>
import NavbarComponent from '@/components/shared/NavbarComponent.vue'
import Footer from '@/components/shared/FooterComponent.vue'
export default {
  name : 'app',
  components : {
    NavbarComponent,
     Footer
  },
  data(){
    return{
      cart : {
        items : [],
      }
    }
  },
  beforeCreate(){
    this.$store.commit('inisializeStore')
  },
  mounted(){
     this.cart = this.$store.state.cart
     console.log('----------------- state car --------------------------')
     console.log(this.cart)
  },
  methods : {
        cartTotalLenght(){
         
        }
  }
}

</script>

<style>

</style>
