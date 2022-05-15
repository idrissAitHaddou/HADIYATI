<template>

    <span class="w-11/12 flex item-center text-xs text-gray-500 justify-start mt-4 mx-auto">
        FINALISATION DE LA COMMANDE
    </span>
                
    <div class="w-11/12 flex flex-col item-center bg-white border rounded-lg mt-2 h-96 mx-auto">
        <div class="flex item-center justify-between border border-l-0 border-r-0 border-t-0 border-b-gray-300 w-full h-10 p-2">
            <div class="flex item-center pt-1">
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="">ADRESSE</span>
                </p>
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="">MODE DE LIVRAISON</span>
                </p>
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="">MODE DE PAIEMENT</span>
                </p>

            </div>
            <div class="pb-1">
                <span class="text-xs">Total : 220,00 DHs</span>
                <router-link to="/command-payment">
                   <button class="ml-3 text-xs text-main-color"> suivant > </button>
                </router-link>
            </div>
        </div>
        <div class="flex item-center justify-between p-4">
            <div class="w-1/2 mt-3 border border-t-0 border-l-0 border-b-0 mr-5">
                <p class="text-xs">Comment voulez-vous que votre commande soit livrée ?</p>
                <p class="flex mr-5 text-xs mt-6">
                    <input id="checkbox-all" checked type="checkbox" class="w-4 h-4 mr-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <span class=" text-xs">MODE DE PAIEMENT</span>
                </p>
                <p class="">
                    <span class="text-xs text-gray-400">Livré entre le</span>
                    <span class="text-xs"> mardi 29 mars</span>
                    <span class="text-xs text-gray-400"> et le</span>
                    <span class="text-xs"> jeudi 31 mars</span>
                    <span class="text-xs text-gray-400"> pour</span>
                    <span class="text-xs text-red-500"> 30.00  Dhs</span>
                </p>
                <div class="w-4/5 mt-3 border p-4">
                    <ul id="cas-command">
                        <li class="text-xs">
                            Dans le cas d’une commande composée (plus d’un article), la
                            livraison pourrait se faire de façon séparée (colis livrés à des 
                            périodes différentes).
                        </li>
                        <li class="text-xs">
                            Livraison gratuite sur les grandes villes
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-1/2">
                
                <p class="flex mr-5 text-xs mt-6">
                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 mr-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <span class=" text-xs">MODE DE PAIEMENT</span>
                </p>
                <p class="">
                    <span class="text-xs text-gray-400">Prêt à être récupéré entre</span>
                    <span class="text-xs"> mardi 29 mars</span>
                    <span class="text-xs text-gray-400"> et le</span>
                    <span class="text-xs"> jeudi 31 mars</span>
                    <span class="text-xs text-gray-400"> pour</span>
                    <span class="text-xs text-red-500"> 00.00  Dhs</span>
                </p>
                <div class="w-4/5 mt-3 border p-4">
                    <ul id="cas-command">
                        <li class="text-xs">
                            Bien sûr, récupéré sera gratuite
                        </li>
                        <li class="text-xs">
                            Bien sûr, récupéré sera gratuite
                        </li>
                    </ul>
                </div>
                <p class="text-xs text-green-500 mt-6">Vous pouvez récupérer directement à notre centre</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){

    }
}
</script>

<style>

 #cas-command{
     list-style-type:disc;
 }

</style>