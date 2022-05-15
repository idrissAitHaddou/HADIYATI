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
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="">MODE DE LIVRAISON</span>
                </p>
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="">MODE DE PAIEMENT</span>
                </p>

            </div>
            <div class="pb-1">
                <span class="text-xs">Total : 220,00 DHs</span>
                <router-link to="/command-valid">
                   <button class="ml-3 text-xs text-main-color"> suivant > </button>
                </router-link>
            </div>
        </div>
        <div class="flex item-center justify-between p-4">

            <div class="mt-3 w-4/5 mx-auto">
                <p class="text-xs w-full text-center">Paiement par carte bancaire (facile, sécurisé et permet d'éviter tout contact avec de la monnaie ou des billets)</p>
                <div class="flex item-center justify-center">
                      <img class="mt-4 mr-3" src="../../assets/images/visaFooter.svg" width="30" height="30" alt="">
                      <img class="mt-4" src="../../assets/images/seVisaFooter.svg" width="30" height="30" alt="">
                </div>
                <form class="mt-10 w-64 mx-auto">
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-xs font-medium text-gray-900 dark:text-gray-300">Numéro de la carte *</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <button class="bg-main-color p-2 rounded-lg text-white text-xs w-full">PAYER MAINTENANT: DHS 220,00</button>
                </form>
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