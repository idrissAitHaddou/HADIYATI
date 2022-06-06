<template>
    <div class="w-11/12 flex item-center justify-center bg-white border rounded-lg mt-2 h-80 mx-auto">
     <div class="w-1/2 h-56 my-auto flex flex-col item-center justify-center">
         <span class="relative w-14 h-14 flex item-center justify-center rounded-full bg-gray-300 mx-auto">
             <!-- <img src="../../assets/images/panierFooter.svg" alt="" width="45" height="45" srcset=""> -->
            <svg class="absolute top-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="orange">
              <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
            </svg>
         </span>
         <span class="mx-auto font-semibold mb-2 remark-cities">Votre panier est vide !</span>
         <span class="mx-auto remark-cities">Parcourez nos catégories et découvrez nos meilleures offres!</span>
         <router-link to="/" class="w-50 mx-auto">
             <button class="bg-whitetext-gray-600 mt-6 border hover:font-bold hover:text-gray-900 hover:border-gray-600 rounded-lg mx-auto text-xs whitespace-nowrap p-3 remark-cities">COMMENCEZ VOS ACHATS</button>
         </router-link>
     </div>
    </div>
</template>
<script>
export default {
    data(){

    }
}
</script>