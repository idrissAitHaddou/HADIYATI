<template>
    <div class="mt-14">
        <h1 class="title-cities w-4/5 mx-auto text-4xl">Les meilleurs cadeaux sont chers</h1>
        <p class="remark-cities w-4/5 mx-auto">Si vous souhaitez des cadeaux, mais d'une forme qui n'est pas sur le site</p>
        <div class="w-4/5 mx-auto my-4 grid grid-cols-4 gap-4">
                <div v-for="product in products" :key="product.id" class="">
                       
                        <div class="card" v-bind:style="addBackgroundLiner(product.background)">
                                        <div class="card-img">
                                                <a :href="setRouteCart(product.id)"><img
                                                    class="w-full h-full"
                                                    :src="require('../../assets/images/products/'+product.images[0].src)"
                                                    alt=""
                                                ></a>
                                        </div>
                                        
                                        <div class="card-info">
                                            <p class="text-body font-mono flex flex-wrap">{{product.name.substr(0,18)}}...</p>
                                        </div>
                                        <div class="card-footer">
                                        <span class="text-body font-mono font-bold mt-1">{{product.price}} DH</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <a :href='setRouteCart(product.id)'> <div class="card-button">
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                            <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                            <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                            </svg>
                                        </div></a>

                                        </div>
                        </div>

                </div>
        </div>
        <div class="w-4/5 mx-auto flex flex-row-reverse">
           <router-link to="/search">
               <button class="btn-see-more-plus">VOIR PLUS</button>
            </router-link>
        </div>
    </div>
 
</template> 

<script>
import axios from 'axios'
export default {
  data(){
    return{
      products : [],
      toleft : '<',
    }
  },
  created(){
      this.getProductsPlus()
  },
   methods:{
        async getProductsPlus(){

            axios.get('http://localhost/hadiyati/rich-products').then((response) => {
                    this.products = response.data
                    console.log('------------ color -------------')
                    console.log(this.products)
                }).catch((error) => {
                    console.log(error);
                })

        },
        setRouteCart(id){
           return '/cart/'+id
        },
        addBackgroundLiner(background){
             return ' background: linear-gradient(135deg, '+background+', #ffffff 100%)';
        }
   }
}
</script>

<style>
/* button to see more */
/* From uiverse.io by @AqFox */
.btn-see-more-plus {
  --c: #fff;
 /* text color */
  background: linear-gradient(90deg, #0000 33%, #fff5, #0000 67%) var(--_p,100%)/300% no-repeat,
    #e1bdbd;
 /* background color */
  color: #0000;
  border: none;
  transform: perspective(500px) rotateY(calc(20deg*var(--_i,-1)));
  text-shadow: calc(var(--_i,-1)* 0.08em) -.01em 0   var(--c),
    calc(var(--_i,-1)*-0.08em)  .01em 2px #0004;
  outline-offset: .1em;
  transition: 0.3s;
}

.btn-see-more-plus:hover,
.btn-see-more-plus:focus-visible {
  --_p: 0%;
  --_i: 1;
}

.btn-see-more-plus:active {
  text-shadow: none;
  color: var(--c);
  box-shadow: inset 0 0 9e9q #0005;
  transition: 0s;
}

.btn-see-more-plus {
  font-family: system-ui, sans-serif;
  font-weight: bold;
  font-size: 2rem;
  margin: 0;
  cursor: pointer;
  padding: .1em .3em;
}

/* list des products */
.list-cards::-webkit-scrollbar {
  display: none;
  -ms-overflow-style: none;
}
/* title */
.title-plus{
    font-family: 'Lobster', cursive;
}
/* From uiverse.io by @mrhyddenn */
.title {
  position: relative;
}

.title span {
  position: absolute;
  color: #fff;
  transform: translate(-50%, -50%);
  font-size: 35px;
  letter-spacing: 5px;
  font-weight: bolder;
}

.title span:nth-child(1) {
  color: #e1bdbd;
  -webkit-text-stroke: 0.3px #e1bdbd;
}

.title span:nth-child(2) {
  color: #e8a9a9;
  -webkit-text-stroke: 1px #dfa0a0;
  animation: uiverse723 3s ease-in-out infinite;
}

@keyframes uiverse723 {
  0%, 100% {
    clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 
     54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
  }

  50% {
    clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 
     51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
  }
}


/* From uiverse.io by @alexruix */
.card {
 /* background: linear-gradient(135deg, #d2dfe4 0%, #ffffff 100%); */
 border-radius: 16px;
 box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.112);
 margin: 10px;
 width: 190px;
 height: 270px;
 padding: .8em;
 position: relative;
 overflow: visible;
}

.card-img {
 height: 130px;
 width: 100%;
 border-radius: .5rem;
 transition: .3s ease;
}

.card-info {
 padding-top: 10%;
}

svg {
 width: 20px;
 height: 20px;
}

.card-footer {
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding-top: 10px;
 border-top: 1px solid #ddd;
}

/*Text*/
.text-title {
 font-weight: 900;
 font-size: 1.2em;
 line-height: 1.5;
}

.text-body {
 font-size: .9em;
 padding-bottom: 10px;
}

/*Button*/
.card-button {
 border: 1px solid #252525;
 display: flex;
 padding: .3em;
 cursor: pointer;
 border-radius: 50px;
 transition: .3s ease-in-out;
}

/*Hover*/
.card-img:hover {
 transform: translateY(-25%);
 /* box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px; */
}

.card-button:hover {
 border: 1px solid #187498;
 background-color: #187498;
}

/* start style of favouti */

/* From uiverse.io by @barisdogansutcu */

.feather {
 fill: hsl(0deg 100% 50%);
 stroke: hsl(0deg 100% 50%);
 animation: heartButton 1s;
}

@keyframes heartButton {
 0% {
  transform: scale(1);
 }

 25% {
  transform: scale(1.3);
 }

 50% {
  transform: scale(1);
 }

 75% {
  transform: scale(1.3);
 }

 100% {
  transform: scale(1);
 }
}



</style>