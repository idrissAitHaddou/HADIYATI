<template>
    <footer class="relative text-gray-600 body-font bg-main-color mt-24">
        <div class="bg-white absolute flex item-center justify-center -top-8 left-1/2 rounded-full border-2 border-main-color h-16 w-16">
           <img src="../../assets/images/panierFooter.svg" width="30" height="30" alt="" srcset="">
        </div>
        <div class="container border border-t-0 border-l-0 border-r-0 border-b-sky-100 px-5 py-14 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
           
            <div class="flex-grow flex flex-wrap item-center justify-around md:pr-20 -mb-10 md:text-left text-center">
                
                    <div class="">
                        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Comment ça marche</h2>
                        <nav class="list-none mb-10">
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Choiser les produites</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Choiser le carde</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Choiser le boîte</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Enregistrer commande</a>
                        </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">À propos</h2>
                        <nav class="list-none mb-10">
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Notre histoire</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">L’équipe</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Qui sélectionne ?</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Nos boutiques</a>
                        </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Nos services</h2>
                        <nav class="list-none mb-10">
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Coffrets cadeaux</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Idées cadeaux</a>
                        </li>
                        <li>
                            <a class="text-white text-xs cursor-pointer hover:text-gray-800">Organisation des événement</a>
                        </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Suivez-nous !</h2>
                        <nav class="list-none mb-10 flex">
                        <li>
                            <img src="../../assets/images/facebookFooter.svg" class="mr-2" width="30" height="30" alt="" srcset="">
                        </li>
                        <li>
                            <img src="../../assets/images/linkdenFooter.svg" class="mr-2" width="30" height="30" alt="" srcset="">
                        </li>
                        <li>
                             <img src="../../assets/images/youtubeFooter.svg" class="mr-2" width="30" height="30" alt="" srcset="">
                        </li>
                        <li>
                             <img src="../../assets/images/twiterFooter.svg" width="30" height="30" alt="" srcset="">
                        </li>
                        </nav>
                    </div>
            </div>
        </div>
        <div class="bg-main-color">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-white text-xs text-center sm:text-left">Copyright © 2022. IGP.com. All rights reserved.</p>
            <div class="inline-flex text-xs text-white sm:ml-auto sm:mt-0 mt-2 justify-center item-center sm:justify-start">
               L'abus d'alcool est dangereux pour la santé. Consommer avec modération. 
               <img src="../../assets/images/visaFooter.svg" class="ml-3 mb-2" width="30" height="30" alt="" srcset="">
               <img src="../../assets/images/seVisaFooter.svg" class="ml-1 mb-2" width="30" height="30" alt="" srcset="">
            </div>
            </div>
        </div>
    </footer>
</template>


<script>
export default {
    name : 'footerComponent'
}
</script>