<template>

    <div v-bind:style="addBorderColor(product[0].background)" class="w-11/12 flex item-center justify-between bg-white border rounded-lg mt-4 h-80 py-3 mx-auto">
       <div class="flex flex-col item-center justify-center w-20">
               <img
                   v-for="(image , index) in product['images']" :key="index"
                    class="mx-auto border w-14 h-14 mt-3 cursor-pointer"
                    :src="require('../assets/images/products/'+image.src)"
                    alt=""
                   @click="changeImgPro(index)"
                >
       </div>
       <div class=" w-11/12">
        <div class="flex flex w-full h-full items-center bg-white rounded-lg">
            
           <div class="w-1/2 h-full border" v-bind:style="addBackgroundLiner(product[0].background)">
                <img 
                    class="object-cover h-48 w-48 mx-auto mt-8 rounded-lg" 
                    :src="require('../assets/images/products/'+srcImage)"
                    alt=""
                >
           </div>
            <div class="flex flex-col w-1/2 justify-between p-4 leading-normal">
                <div class="flex justify-between">
                    <h4 class="remark-cities mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">{{product[0].name}}</h4>
                    <div>
                        <img class="" src="../assets/images/heartVide.svg" alt="">
                    </div>
                </div>
                <div class="mb-3 text-xs flex justify-between font-normal border border-t-0 border-r-0 border-l-0 border-gray-200 p-2 text-gray-700 dark:text-gray-400">
                    <div class="flex">
                        <img 
                        src="../assets/images/likeHeart.svg"
                         alt=""
                         >
                        <span class="remark-cities">({{product[0].num_love}}) favourises</span>  
                    </div>
                </div>
                <div>
                    <p class="remark-cities text-sm">
                        {{product[0].descritpion}}
                    </p>
                    <p class="mt-3">
                        <span class="remark-cities mr-4"> {{product[0].price * quantity}} Dh</span>
                        <span v-if="product[0].old_price!=0" class="text-gray-400 line-through"> {{product[0].old_price}} Dhs</span>
                    </p>
                    <p class="remark-cities mt-4">
                        Marque: {{product['mode'][0].name}}
                    </p>
                    <div class="flex item-center justify-start mt-3">
                        <button v-if="quantity==1" @click="addLess()" class="mt-3 w-6 h-6 bg-orange-200 text-sm text-gray-600 font-bold flex item-center justify-center">-</button>
                        <button v-bind:style="addBackgroundLiner(product[0].background)" v-else-if="quantity!=1" @click="addLess()" class="mt-3 w-6 h-6 text-sm text-gray-600 font-bold flex item-center justify-center">-</button>
                        <span class="mt-3 w-6 h-6 text-sm text-red-600 text-center font-bold">{{quantity}}</span>
                        <button v-bind:style="addBackgroundLiner(product[0].background)" @click="addCount()" class="mt-3 w-6 h-6 bg-red-600 text-sm text-gray-600 font-bold flex item-center justify-center">+</button>
                    </div>
                    <button  v-bind:style="addBackgroundLiner(product[0].background)" @click="addToCart(product[0].price)" class="remark-cities w-48 mt-4 p-2 text-md font-bold whitespace-nowrap rounded-lg text-gray-500">Ajouter</button> 
                    <div v-if="messageToAddCart=='loading'" class="line-wobble w-48">

                    </div>
               
                </div>
            </div>
        </div>
       </div>
      
    </div>

</template>
<script>

import axios from 'axios'
export default {
    data(){
       return {
           product : [],
           quantity : 1,
           messageToAddCart : '',
           srcImage : '',
       }
    },
    created () {
       this.getProduct()
    },
    methods : {
        changeImgPro(index){
          this.srcImage = this.product['images'][index].src
        },
        addBackgroundLiner(background){
             return ' background: linear-gradient(135deg, '+background+', #ffffff 100%)';
        },
        addBorderColor(background){
             return ' border : 1px solid '+background;
        },
        getProduct(){
            axios.get('http://localhost/hadiyati/get-product/'+this.$route.params.id).then((response) => {
                this.product = response.data
                this.srcImage = this.product['images'][0].src
            }).catch((error) => {
                console.log(error);
            })
            
            // console.log('------------ :::::::::::::::: '+this.$store.state.tottalPrice)
        },
        addCount(){
               this.quantity = this.quantity +1
        },
        addLess(){
            if(this.quantity>1){
                this.quantity = this.quantity -1
            }
        },
        addToCart(price){
          this.messageToAddCart = 'loading'
          if(isNaN(this.quantity) || this.quantity<1){
              this.quantity = 1
          }
          const item = {
              product : this.product,
              price : price,
              quantity : this.quantity
          }

         this.$store.commit('addToCart' , item)
         this.$store.commit('calculePrice')
         setTimeout( function(){ console.log('loading') } , 20000)
         this.messageToAddCart = ''

        }
    }

}
</script>

<style>


/* From uiverse.io by @G4b413l */
.line-wobble {
 --uib-size: 80px;
 --uib-speed: 1.55s;
 --uib-color: rgb(231, 210, 164);
 --uib-line-weight: 5px;
 position: relative;
 display: flex;
 align-items: center;
 justify-content: center;
 height: var(--uib-line-weight);
 border-radius: calc(var(--uib-line-weight) / 2);
 overflow: hidden;
 transform: translate3d(0, 0, 0);
}

.line-wobble::before {
 content: '';
 position: absolute;
 top: 0;
 left: 0;
 height: 100%;
 width: 100%;
 background-color: var(--uib-color);
 opacity: 0.1;
}

.line-wobble::after {
 content: '';
 height: 100%;
 width: 100%;
 border-radius: calc(var(--uib-line-weight) / 2);
 animation: wobble var(--uib-speed) ease-in-out infinite;
 transform: translateX(-90%);
 background-color: var(--uib-color);
}

@keyframes wobble {
 0%,
  100% {
  transform: translateX(-90%);
 }

 50% {
  transform: translateX(90%);
 }
}




</style>