<template>


    <div class="mt-14">
        <h1 class="title-cities w-4/5 mx-auto text-4xl">Où sommes-nous?</h1>
        <p class="remark-cities w-4/5 mx-auto">Si vous souhaitez des cadeaux, mais d'une forme qui n'est pas sur le site</p>
        <div class="w-4/5 mx-auto my-4 grid grid-cols-4 gap-4">
                <div v-for="city in cities" :key="city" class="">
                    <a href="#">
                        <img class="rounded-t-lg"  :src="require('../../assets/images/cities/'+city.image)" alt="" />
                    </a>
                    <div class="p-1 flex justify-between item-center">
                        <span class="remark-cities">{{city.name}} </span>
                        <span class="remark-cities">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer" viewBox="0 0 20 20" fill="orange" @click="showModel(city.name , city.localisation)">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>

                </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="model-localisation" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto mx-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="remark-cities text-xl font-semibold text-gray-900 dark:text-white">
                        {{name}}
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="showModel('' , '')">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <!-- Modal body -->
                 <iframe class="w-full h-96 p-2" :src="localisation" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


</template>

<script>
import axios from 'axios'
export default {
  data(){
    return{
      cities : [],
      name : '',
      localisation : '',
      toleft : '<',
    }
  },
  created(){
      this.getProductsPlus()
  },
   methods:{
      getProductsPlus(){
            axios.get('http://localhost/hadiyati/cities').then((response) => {
                    this.cities = response.data
                }).catch((error) => {
                    console.log(error);
                })
        },
        showModel(name , localisation){
            this.name = name
            this.localisation = localisation
            const model = document.getElementById('model-localisation')
                  model.classList.toggle('hidden')
                  console.log(name+localisation)
        }
   }
}
</script>

<style>

.title-cities{
    font-family: 'Lobster', cursive;
}
.remark-cities{
    font-family: cursive;
}

</style>
