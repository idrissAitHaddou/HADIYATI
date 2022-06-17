<template>
    <div class="w-11/12 flex md:flex-row flex-col item-center justify-center rounded-lg mt-2 h-auto mx-auto">
    <!-- start menu of profile -->
            <div class="w-full md:w-48 bg-white h-36 mr-8 rounded-lg mb-4 md:mb-0">
                <router-link to="/profile/index"><div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs remark-cities">Votre compte Hadiyati</p>
               </div></router-link>
                <router-link to="/profile/commands"><div class="p-2 border border-r-0 border-t-0 border-b-0 border-l-red-500 mt-2">
                   <p class="text-xs remark-cities">Vos commandes</p>
               </div></router-link>
                <!-- <router-link to="/profile/Envies"><div class="p-2">
                   <p class="text-xs">Votre liste d'envies</p>
               </div></router-link> -->
                <router-link to="/profile/pass"><div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs remark-cities">Modifier votre mot de passe</p>
               </div></router-link>
                <div class="mt-1 p-2">
                   <p @click="logout()" class="text-xs text-center text-red-500 cursor-pointer remark-cities">déconnexion</p>
               </div>
            </div>
    <!-- end menu of profile -->
        <div class="w-full md:w-4/5 mx-auto md:mx-0 bg-white rounded-lg">
                <div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs remark-cities">Votre commandes</p>
               </div>
               <!-- products -->
               <div v-for="(product , index) in products" :key="index">

                        <div class="flex md:flex-row flex-col w-full items-center md:justify-between bg-white rounded-lg p-2 border">
                                <div class="flex w-full">
                                        <img 
                                        class="object-cover h-full w-28 rounded-lg border border-gray-300" 
                                        :src="require('../../assets/images/products/'+product.image)"
                                        alt="" />
                                        <div class="flex flex-col justify-between px-4 leading-normal">
                                            <h5 class="mb-2 text-xs tracking-tight text-gray-900 dark:text-white remark-cities">{{product.name.substr(0,40)}}</h5>
                                            <p>
                                                <span class="mb-3 text-xs text-black remark-cities">{{product.price}} Dhs</span>
                                            </p>
                                            <p>
                                                <span class="mb-3 text-xs text-black remark-cities">quantité : {{product.quantity}}</span>
                                            </p>
                                            <div @click="destroyCommand(product.id)" class="flex flex justify-start leading-normal">
                                                <button class="text-red-600 mt-3 text-[#D4C536]">supprimer</button>
                                                <img class="text-yellow-300 mt-3" src="../../assets/images/deleteiconYellow.svg" alt="">
                                            </div>
                                        </div>
                                </div>


                                <ul role="list" class="w-full mt-6 md:mt-0 item-center justify-around flex md:flex-col flex-row md:w-48 md:space-y-5">
                                    <li class="flex flex-row space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" :fill="stateEcour(product.state)" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"> enCoureF</span>
                                    </li>
                                    <li class="flex flex-row space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" :fill="stateConfirmer(product.state)" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">confirmer</span>
                                    </li>
                                    <li class="flex flex-row space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" :fill="stateLivraison(product.state)" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">livraison</span>
                                    </li>
                                </ul>


                        </div>


               </div>
           
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data(){
        return {
            products : [],
        }
    },
    created(){
        this.getProducts()
    },
    
    methods : {
        logout(){
        this.$store.commit('logout')
        },
        stateEcour(state){

            if(state == 'enCoureF' || state == 'confirmer' || state == 'livraison'){
                return 'orange'
            }else{
                return 'gray'
            }
        },
        stateConfirmer(state){

            if(state == 'confirmer' || state == 'livraison'){
                return 'orange'
            }else{
                return 'gray'
            }
        },
        stateLivraison(state){
            if(state == 'livraison'){
                return 'orange'
            }else{
                return 'gray'
            }
        },
        async getProducts(){

            axios.get('http://localhost/hadiyati/command-products/'+this.$store.state.id_user_login).then((response) => {
                    this.products = response.data 
                    console.log('------------ products ---------------')
                    console.log(this.products)
                  }).catch((error) => {
                    console.log(error)
                  })

        },
        destroyCommand(id){
                 axios.get('http://localhost/hadiyati/destroy-command/'+id).then((response) => {
                    console.log('------------ products ---------------')
                    console.log(response.data)
                    window.location.href = 'http://localhost:8080/profile/commands'
                  }).catch((error) => {
                    console.log(error)
                  })
        }
    }
}
</script>

<style>

#attention{
    font-size: 10px !important;
}



</style>