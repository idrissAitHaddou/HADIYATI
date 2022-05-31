<template>

        <div class="max-w-sm bg-white rounded-lg shadow-md mb-3">
        
            <div class="relative">
                <a href="#" class="">
                    <!-- src="../../assets/images/products/23T115647.206.jpg"  -->
                    <img class="rounded-t-lg h-48 w-full" 
                        :src="require('../../assets/images/products/'+src)"
                        alt="product image"
                    >
                </a>
                <a href="#">  
                    <span class="absolute top-0 right-0 h-11 w-11 rounded-bl-full bg-white pl-1">
                        <svg class="h-6 w-6 mx-auto mt-1" xmlns="http://www.w3.org/2000/svg" fill="#C5AAAC" viewBox="0 0 512 512"><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
                    </span>
                </a>
            </div>
        
            <div class="px-1.5 pt-4">
                <a href="#" class="">
                <h5 class="text-sm font-medium mb-2 tracking-tight text-gray-900 dark:text-white"> {{name}} </h5>
                </a>
            
                <div class="flex items-center">
                    <div class="flex items-center mb-1">
                        <span class="text-xl text-gray-900 dark:text-white font-bold"> {{price}} </span>
                        <span class="text-sm text-gray-900 dark:text-white mt-1 px-1">MAD</span>
                    </div>
                    <div v-if="oldPrice!=0" class="flex items-center mb-1 ml-3 line-through">
                        <span class="text-xmdl text-gray-400 dark:text-white font-bold"> {{oldPrice}} </span>
                        <span class="text-xs text-gray-400 dark:text-white mt-1 px-1">MAD</span>
                    </div>
                </div>

                <div class="flex item-center">
                    <svg class="h-3 w-3 my-auto mr-1" xmlns="http://www.w3.org/2000/svg" fill='#DA2F47' viewBox="0 0 496 512"><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm114.6 226.4l-113 152.7-112.7-152.7c-8.7-11.9-19.1-50.4 13.6-72 28.1-18.1 54.6-4.2 68.5 11.9 15.9 17.9 46.6 16.9 61.7 0 13.9-16.1 40.4-30 68.1-11.9 32.9 21.6 22.6 60 13.8 72z"/></svg>
                    <span class="text-xs">({{numLove}}) favourises</span>
                </div>
                <div class="flex item-center justify-center py-1">
                    <button class="bg-main-color text-white text-xs p-2 mx-auto rounded-lg">AJOUTER AU PANIER</button>
                </div>
            </div>
    </div>

</template>

<script>
export default {
    props: ['name','price','oldPrice','numLove','src'],
    name : 'cardComponent'
}
</script>

<style>


</style>