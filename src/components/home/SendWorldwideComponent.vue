<template>
    <div>
        
            <h1 class="text-center font-medium my-10 text-xl">les ville</h1>

            <div id="controls-carousel" class="relative" data-carousel="static">

                <div class="overflow-hidden relative h-80 rounded-lg">

                    <div v-for="item in 2" :key="item" class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
                      <div class="grid grid-cols-4 gap-2 px-5 py-3">
                           
                           <template v-if="item==1">
                               <div v-for="city in firstCities" :key="city" class="max-w-sm bg-white rounded-lg shadow-md">

            
                                                <div class="relative">
                                                    <a href="#" class="">
                                                      <img class="rounded-t-lg w-full" 
                                                        :src="require('../../assets/images/cities/'+city.image)"
                                                        alt="product image"
                                                      >
                                                    </a>  
                                                    <a href="#"> 
                                                    </a>
                                                </div>
                                            
                                                <div class="px-1.5">
                                                    <a href="#" class="">
                                                      <h5 class="text-sm font-medium tracking-tight text-gray-900 text-black text-center pb-2 pt-1"> {{city.name}} </h5>
                                                    </a>
                                                
                                                </div>

                                </div>
                            </template>


                           <template v-else-if="item==2">
                               <div v-for="city in scondCities" :key="city" class="max-w-sm bg-white rounded-lg shadow-md">
                                
                                          <div class="relative">
                                              <a href="#" class="">
                                                <img class="rounded-t-lg w-full" 
                                                    :src="require('../../assets/images/cities/'+city.image)"
                                                    alt="product image"
                                                >
                                              </a>  
                                              <a href="#"> 
                                              </a>
                                          </div>
                                            
                                          <div class="px-1.5">
                                              <a href="#" class="">
                                                <h5 class="text-sm font-medium tracking-tight text-gray-900 text-black text-center pb-2 pt-1"> {{city.name}} </h5>
                                              </a>
                                          
                                          </div>

                                </div>
                            </template>





                          
                      </div>
                    </div>

                
                </div>

                <button type="button" class="flex absolute -top-10 left-0 z-30 justify-center items-center px-3 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
                <span class="inline-flex bg-red-500 justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
                </span>
                </button>
                <button type="button" class="flex absolute -top-10 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
                <span class="inline-flex bg-red-500 justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
                </span>
                </button>
            </div>

    </div>
</template>

<script>
import axios from 'axios'
export default {
  data(){
    return{
      firstCities : [],
      scondCities : [],
    }
  },
  created(){
      this.getProductsPlus()
  },
   methods:{
        async getProductsPlus(){

            axios.get('http://localhost/hadiyati/cities').then((response) => {
                    this.productsPlus = response.data
                  
                    // console.log(response.data[0]);

                    for(let i=0 ; i<response.data.length ; i++){
                        if(i<4){
                            this.firstCities.push(response.data[i])
                        }
                        if(i>3){
                            this.scondCities.push(response.data[i])
                        }
                    }
                    
                }).catch((error) => {
                    console.log(error);
                })

        }
   }
}
</script>

<style>


</style>