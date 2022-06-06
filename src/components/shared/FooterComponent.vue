<template>

    <footer class="bg-footer relative w-full text-gray-600 mt-24">
        <div class="bg-white relative flex item-center justify-center -top-8 mx-auto rounded-full border-2 border-orange-300 h-16 w-16">
            <svg class="absolute top-4" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="orange">
              <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="container border border-t-0 border-l-0 border-r-0 border-b-sky-100 px-5 py-3 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
           
            <div class="flex-grow flex flex-wrap item-center justify-around md:pr-20 -mb-10 md:text-left text-center">
                
                    <div class="">
                        <h2 class="title title-font font-medium text-white tracking-widest text-sm mb-3">Comment ça marche</h2>
                        <nav class="list-none mb-10">
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Choiser les produites</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Choiser le carde</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Choiser le boîte</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Enregistrer commande</a>
                        </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title title-font font-medium text-white tracking-widest text-sm mb-3">À propos</h2>
                        <nav class="list-none mb-10">
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Notre histoire</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">L’équipe</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Qui sélectionne ?</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Nos boutiques</a>
                        </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title title-font font-medium text-white tracking-widest text-sm mb-3">Nos services</h2>
                        <nav class="list-none mb-10">
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Coffrets cadeaux</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Idées cadeaux</a>
                        </li>
                        <li>
                            <a class="mini-title text-white text-xs cursor-pointer hover:text-gray-800">Organisation des événement</a>
                        </li>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="title title-font font-medium text-white tracking-widest text-sm mb-3">Suivez-nous !</h2>
                            <nav class="list-none mb-10 flex">
                            <li>
                                
                            </li>
                        </nav>
                    </div>
            </div>
        </div>
        <div class="bg-footer">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="mini-title text-white text-xs text-center sm:text-left">Copyright © 2022. IGP.com. All rights reserved.</p>
            <div class="mini-title inline-flex text-xs text-white sm:ml-auto sm:mt-0 mt-2 justify-center item-center sm:justify-start">
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
<style>
/* background color of footer */
.bg-footer{
    background-color: #b22727bc !important;
}
/* title */
.title{
    font-family: 'Lobster', cursive;
}
.mini-title{
    font-family: cursive;
}

</style>