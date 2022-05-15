<template>

  <div class="bg-body-color">
    <NavbarComponent/>
    <Footer/>
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
  }
}

</script>

<style>

</style>
