<template>
  <div class="flex w-full mb-8 relative">
       <img class="" src="../../assets/images/hero-hadiyati.svg" alt="" srcset="">
       <img class="md:w-96 md:h-96 w-28 h-28 img-change bottom-8 right-10 absolute md:top-10 md:right-14 h-full z-10" :src="require('../../assets/images/slider/'+image)" alt="" srcset="">
  </div>
</template>

<script>
export default {
  data(){
    return{
      image : 'gift1.png',
      images : [
         'gift1.png' ,
         'gift2.png' ,
         'gift3.png',
         ],
      posSrc : 0,
    }
  },
  created(){
          this.changeImageSrc()
  },
  methods : {
    changeImageSrc(){
        this.posSrc = this.posSrc + 1
        if(this.posSrc==this.images.length){
          this.posSrc = 0
        }
        setTimeout(()=> {this.image = this.images[this.posSrc] ,  this.changeImageSrc()} ,2000)
    }
  }
};
</script>

<style>

/* .img-change{
  width: 400px !important;
  height: 400px !important;
} */

</style>
