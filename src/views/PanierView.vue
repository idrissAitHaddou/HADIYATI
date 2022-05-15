<template>

   <div v-if="test">
     <PanierVideComponent/> 
   </div>
   <div v-else>
     <PanierOrdrsComponent/> 
   </div>

    <div class="w-11/12 flex flex-col item-center justify-center bg-[#F9E3E3] border rounded-lg mt-2 h-auto pb-4 mx-auto">
    <div class="w-full px-8 pt-3 flex justify-between item-center">
        <span class="font-medium">Cadeaux les plus vendus</span>
        <span class="text-blue-500">voir plue ></span>
    </div>

    <div class="w-full px-2 pt-3 flex justify-between item-center">

            <div class="max-w-sm bg-white rounded-lg shadow-md mr-1">
    
                    <div class="relative">
                        <a href="#" class="">
                        <img class="rounded-t-lg w-full" src="../assets/images/MilleurProduct.svg" alt="product image">
                        </a>
                        <a href="#">  
                            <span class="absolute top-0 right-0 h-11 w-11 rounded-bl-full bg-white pl-1">
                                <svg class="h-6 w-6 mx-auto mt-1" xmlns="http://www.w3.org/2000/svg" fill="#C5AAAC" viewBox="0 0 512 512"><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                            </span>
                        </a>
                    </div>
                    
                    <div class="px-1.5 pt-4">
                        <a href="#" class="">
                        <h5 class="text-sm font-medium mb-2 tracking-tight text-gray-900 dark:text-white">This is title of gift , 2022 year , and ... </h5>
                        </a>
                    
                        <div class="flex items-center">
                            <div class="flex items-center mb-1">
                                <span class="text-xl text-gray-900 dark:text-white font-bold">599</span>
                                <span class="text-sm text-gray-900 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                            <div class="flex items-center mb-1 ml-3 line-through">
                                <span class="text-xmdl text-gray-400 dark:text-white font-bold">620</span>
                                <span class="text-xs text-gray-400 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                        </div>

                        <div class="flex item-center">
                        <svg class="h-3 w-3 my-auto mr-1" xmlns="http://www.w3.org/2000/svg" fill='#DA2F47' viewBox="0 0 496 512"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm114.6 226.4l-113 152.7-112.7-152.7c-8.7-11.9-19.1-50.4 13.6-72 28.1-18.1 54.6-4.2 68.5 11.9 15.9 17.9 46.6 16.9 61.7 0 13.9-16.1 40.4-30 68.1-11.9 32.9 21.6 22.6 60 13.8 72z"/></svg>
                            <span class="text-xs">(120) favourises</span>
                        </div>
                    </div>

            </div>

             <div class="max-w-sm bg-white rounded-lg shadow-md mr-1">
    
                    <div class="relative">
                        <a href="#" class="">
                        <img class="rounded-t-lg w-full" src="../assets/images/MilleurProduct.svg" alt="product image">
                        </a>
                        <a href="#">  
                            <span class="absolute top-0 right-0 h-11 w-11 rounded-bl-full bg-white pl-1">
                                <svg class="h-6 w-6 mx-auto mt-1" xmlns="http://www.w3.org/2000/svg" fill="#C5AAAC" viewBox="0 0 512 512"><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                            </span>
                        </a>
                    </div>
                    
                    <div class="px-1.5 pt-4">
                        <a href="#" class="">
                        <h5 class="text-sm font-medium mb-2 tracking-tight text-gray-900 dark:text-white">This is title of gift , 2022 year , and ... </h5>
                        </a>
                    
                        <div class="flex items-center">
                            <div class="flex items-center mb-1">
                                <span class="text-xl text-gray-900 dark:text-white font-bold">599</span>
                                <span class="text-sm text-gray-900 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                            <div class="flex items-center mb-1 ml-3 line-through">
                                <span class="text-xmdl text-gray-400 dark:text-white font-bold">620</span>
                                <span class="text-xs text-gray-400 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                        </div>

                        <div class="flex item-center">
                        <svg class="h-3 w-3 my-auto mr-1" xmlns="http://www.w3.org/2000/svg" fill='#DA2F47' viewBox="0 0 496 512"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm114.6 226.4l-113 152.7-112.7-152.7c-8.7-11.9-19.1-50.4 13.6-72 28.1-18.1 54.6-4.2 68.5 11.9 15.9 17.9 46.6 16.9 61.7 0 13.9-16.1 40.4-30 68.1-11.9 32.9 21.6 22.6 60 13.8 72z"/></svg>
                            <span class="text-xs">(120) favourises</span>
                        </div>
                    </div>
                    
            </div>

             <div class="max-w-sm bg-white rounded-lg shadow-md mr-1">
    
                    <div class="relative">
                        <a href="#" class="">
                        <img class="rounded-t-lg w-full" src="../assets/images/MilleurProduct.svg" alt="product image">
                        </a>
                        <a href="#">  
                            <span class="absolute top-0 right-0 h-11 w-11 rounded-bl-full bg-white pl-1">
                                <svg class="h-6 w-6 mx-auto mt-1" xmlns="http://www.w3.org/2000/svg" fill="#C5AAAC" viewBox="0 0 512 512"><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                            </span>
                        </a>
                    </div>
                    
                    <div class="px-1.5 pt-4">
                        <a href="#" class="">
                        <h5 class="text-sm font-medium mb-2 tracking-tight text-gray-900 dark:text-white">This is title of gift , 2022 year , and ... </h5>
                        </a>
                    
                        <div class="flex items-center">
                            <div class="flex items-center mb-1">
                                <span class="text-xl text-gray-900 dark:text-white font-bold">599</span>
                                <span class="text-sm text-gray-900 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                            <div class="flex items-center mb-1 ml-3 line-through">
                                <span class="text-xmdl text-gray-400 dark:text-white font-bold">620</span>
                                <span class="text-xs text-gray-400 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                        </div>

                        <div class="flex item-center">
                        <svg class="h-3 w-3 my-auto mr-1" xmlns="http://www.w3.org/2000/svg" fill='#DA2F47' viewBox="0 0 496 512"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm114.6 226.4l-113 152.7-112.7-152.7c-8.7-11.9-19.1-50.4 13.6-72 28.1-18.1 54.6-4.2 68.5 11.9 15.9 17.9 46.6 16.9 61.7 0 13.9-16.1 40.4-30 68.1-11.9 32.9 21.6 22.6 60 13.8 72z"/></svg>
                            <span class="text-xs">(120) favourises</span>
                        </div>
                    </div>
                    
            </div>

             <div class="max-w-sm bg-white rounded-lg shadow-md mr-1">
    
                    <div class="relative">
                        <a href="#" class="">
                        <img class="rounded-t-lg w-full" src="../assets/images/MilleurProduct.svg" alt="product image">
                        </a>
                        <a href="#">  
                            <span class="absolute top-0 right-0 h-11 w-11 rounded-bl-full bg-white pl-1">
                                <svg class="h-6 w-6 mx-auto mt-1" xmlns="http://www.w3.org/2000/svg" fill="#C5AAAC" viewBox="0 0 512 512"><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                            </span>
                        </a>
                    </div>
                    
                    <div class="px-1.5 pt-4">
                        <a href="#" class="">
                        <h5 class="text-sm font-medium mb-2 tracking-tight text-gray-900 dark:text-white">This is title of gift , 2022 year , and ... </h5>
                        </a>
                    
                        <div class="flex items-center">
                            <div class="flex items-center mb-1">
                                <span class="text-xl text-gray-900 dark:text-white font-bold">599</span>
                                <span class="text-sm text-gray-900 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                            <div class="flex items-center mb-1 ml-3 line-through">
                                <span class="text-xmdl text-gray-400 dark:text-white font-bold">620</span>
                                <span class="text-xs text-gray-400 dark:text-white mt-1 px-1">MAD</span>
                            </div>
                        </div>

                        <div class="flex item-center">
                        <svg class="h-3 w-3 my-auto mr-1" xmlns="http://www.w3.org/2000/svg" fill='#DA2F47' viewBox="0 0 496 512"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm114.6 226.4l-113 152.7-112.7-152.7c-8.7-11.9-19.1-50.4 13.6-72 28.1-18.1 54.6-4.2 68.5 11.9 15.9 17.9 46.6 16.9 61.7 0 13.9-16.1 40.4-30 68.1-11.9 32.9 21.6 22.6 60 13.8 72z"/></svg>
                            <span class="text-xs">(120) favourises</span>
                        </div>
                    </div>
                    
            </div>

    </div>
      
    </div>

</template>

<script>
import PanierVideComponent from '../components/panier/PanierVideComponent.vue'
import PanierOrdrsComponent from '../components/panier/PanierOrdrsComponent.vue'
export default {
    name : "panierView",
    data(){
        return{
            test : false
        }
    },
    components : {
        PanierVideComponent,
        PanierOrdrsComponent
    }

}
</script>