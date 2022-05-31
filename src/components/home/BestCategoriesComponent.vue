<template>


  <div class="mt-10 px-4 grid md:grid-cols-3 sm:grid-cols-2 gap-4">
 
    <template v-for="categorei in categoreis" :key="categorei.id">

        <div
          class="bg-white rounded-lg border border-gray-200 shadow-md"
        >
            <!-- :src="require(`../../assets/images/${images[categorei.id-1].src}`)" -->
          <a href="#">
            <img
              :src="require('../../assets/images/'+categorei.image)"
              class="rounded-t-lg w-full"
              alt=""
            />
          </a>
          <div class="flex item-center justify-between p-3">
            <a
              href="#"
              class="inline-flex items-center whitespace-nowrap py-2 px-4 text-sm font-light text-center text-black rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              {{categorei.name}}
            </a>
            <a
              href="#"
              class="inline-flex text-teal-400 items-center whitespace-nowrap py-2 px-4 text-sm font-light text-center text-gray-900 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700"
            >
              see more
            </a>
          </div>
        </div>

    </template>

  </div>

<p class="text-right text-sm py-3 px-5 text-teal-400">see more</p>


</template>

<script>
import axios from 'axios'
export default {
  data(){
   return{
     categoreis : [],
     srcImg : 'betLove.svg',
   }
  },
  created(){
    this.getCategoreis()
  },
  methods:{
    async getCategoreis(){
      try {
        const response = await axios.get("http://localhost/hadiyati/best-categories");
        const data = await JSON.parse(JSON.stringify(response.data));
        if (data) {
          this.categoreis = data;
          console.log(this.categoreis)
        }
      } catch (error) {
        console.log(error);
      }
    }
  }
};
</script>
