<template>
    <div>
        

            <h1 class="text-center font-medium my-10 text-xl">Send Gifts Worldwide</h1>

            <div id="controls-carousel" class="relative" data-carousel="static">

                <div class="overflow-hidden relative h-56 rounded-lg">

                    <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
                      <div class="grid grid-cols-4 gap-2 h-full w-full px-5 py-3">

                          
                            <div class="max-w-sm bg-white rounded-lg shadow-md">
                                
                                    <div class="relative">
                                        <a href="#" class="">
                                          <img class="rounded-t-lg w-full" src="../../assets/images/agadirCity.svg" alt="product image">
                                        </a>  
                                         <a href="#"> 
                                        </a>
                                    </div>
                                
                                <div class="px-1.5">
                                    <a href="#" class="">
                                      <h5 class="text-sm font-medium tracking-tight text-gray-900 text-black text-center pb-2 pt-1">Agadir</h5>
                                    </a>
                                
                                </div>
                            </div>



                            <div class="max-w-sm bg-white rounded-lg shadow-md">
                                
                                    <div class="relative">
                                        <a href="#" class="">
                                          <img class="rounded-t-lg w-full" src="../../assets/images/tangerCity.svg" alt="product image">
                                        </a>  
                                         <a href="#"> 
                                        </a>
                                    </div>
                                
                                <div class="px-1.5">
                                    <a href="#" class="">
                                      <h5 class="text-sm font-medium tracking-tight text-gray-900 text-black text-center pb-2 pt-1">Tanger</h5>
                                    </a>
                                
                                </div>
                            </div>



                            <div class="max-w-sm bg-white rounded-lg shadow-md">
                                
                                    <div class="relative">
                                        <a href="#" class="">
                                          <img class="rounded-t-lg w-full" src="../../assets/images/casaCity.svg" alt="product image">
                                        </a>  
                                         <a href="#"> 
                                        </a>
                                    </div>
                                
                                <div class="px-1.5">
                                    <a href="#" class="">
                                      <h5 class="text-sm font-medium tracking-tight text-gray-900 text-black text-center pb-2 pt-1">Casa</h5>
                                    </a>
                                
                                </div>
                            </div>


                            <div class="max-w-sm bg-white rounded-lg shadow-md">
                                
                                    <div class="relative">
                                        <a href="#" class="">
                                          <img class="rounded-t-lg w-full" src="../../assets/images/rabatCity.svg" alt="product image">
                                        </a>  
                                         <a href="#"> 
                                        </a>
                                    </div>
                                
                                <div class="px-1.5">
                                    <a href="#" class="">
                                      <h5 class="text-sm font-medium tracking-tight text-gray-900 text-black text-center pb-2 pt-1">Rabat</h5>
                                    </a>
                                
                                </div>
                            </div>


                             

                          
                      </div>
                    </div>

                    <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                    <img src="../../assets/images/bestCopines.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                    <img src="../../assets/images/bestMariage.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                
                </div>

                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-3 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
                <span class="inline-flex bg-red-500 justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
                </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
                <span class="inline-flex bg-red-500 justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
                </span>
                </button>
            </div>

    </div>
</template>

<script>
export default {
    name : 'sendWorldwideComponent'
}
</script>

<style>


</style>