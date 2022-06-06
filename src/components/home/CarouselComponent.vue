<template>
  <div class="flex w-full mb-8">
       <img class="" src="../../assets/images/hero-hadiyati.svg" alt="" srcset="">
       <img class="img-change absolute top-20 right-14 h-full z-10" :src="require('../../assets/images/slider/'+image)" alt="" srcset="">
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

.img-change{
  width: 400px !important;
  height: 400px !important;
}

</style>
