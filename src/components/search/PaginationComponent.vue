<template>
    <div class="p-2 flex item-center justify-center">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px">

                <li>
                     <a v-if="pageNumber>1" @click="pageNumber = pageNumber - 1;passEvent()" href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>

                <template v-for="item in numberPages" :key="item">
                    <li v-if="item<6">
                       <a @click="pageNumber = item;passEvent()" href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            {{item}}
                       </a>
                    </li>
                </template>

                <li>
                     <a v-if="pageNumber<numberPages" @click="pageNumber = pageNumber + 1;passEvent()" href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>

            </ul>
        </nav>
    </div>

</template>

<script>
export default {
     data(){
    return{
       pageNumber : 1,
       perPage: 9,
    }
   },
   props:{
     totalItems: {
            type : Number,
            required : true
     }
   },
   computed:{
       numberPages(){
           return Math.ceil(this.totalItems / this.perPage)
       }
   },
   methods:{
       passEvent()
        {
            this.$emit('changePage',this.pageNumber)
        }
   }

}
</script>

<style>


</style>