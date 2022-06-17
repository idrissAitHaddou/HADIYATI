<template>
    <div class="mt-14">
        <h1 class="title-cities w-4/5 mx-auto md:text-4xl text-lg">Nouveaux cadeaux</h1>
        <p class="remark-cities w-4/5 mx-auto md:text-sm text-xs">Nous vous fournissons de nouveaux cadeaux avec naturellement de haute qualité</p>
        <div class="w-4/5 mx-auto my-4 grid grid-cols-1 md:grid-cols-4 gap-4">
                <div v-for="(product , index) in products" :key="index" class="">

                        <div class="card mx-auto" v-bind:style="addBackgroundLiner(product.background)">
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
                                        <a :href='setRouteCart(product.id)'>
                                        <span class="flex relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-heart cursor-pointer"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span class="absolute -top-3 -right-1 bg-red-500 rounded-full text-white w-4 h-4 text-xs text-center">{{product.numberLikes}}</span>
                                        </span>
                                        </a>
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
               <button class="btn-see-more-recent">VOIR PLUS</button>
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

            axios.get('http://localhost/hadiyati/last-products').then((response) => {
                    this.products = response.data
                    console.log(response.data[0]);
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
.btn-see-more-recent {
  --c: #fff;
 /* text color */
  background: linear-gradient(90deg, #0000 33%, #fff5, #0000 67%) var(--_p,100%)/300% no-repeat,
    #bddde1;
 /* background color */
  color: #0000;
  border: none;
  transform: perspective(500px) rotateY(calc(20deg*var(--_i,-1)));
  text-shadow: calc(var(--_i,-1)* 0.08em) -.01em 0   var(--c),
    calc(var(--_i,-1)*-0.08em)  .01em 2px #0004;
  outline-offset: .1em;
  transition: 0.3s;
}

.btn-see-more-recent:hover,
.btn-see-more-recent:focus-visible {
  --_p: 0%;
  --_i: 1;
}

.btn-see-more-recent:active {
  text-shadow: none;
  color: var(--c);
  box-shadow: inset 0 0 9e9q #0005;
  transition: 0s;
}

.btn-see-more-recent {
  font-family: system-ui, sans-serif;
  font-weight: bold;
  font-size: 2rem;
  margin: 0;
  cursor: pointer;
  padding: .1em .3em;
}


</style>