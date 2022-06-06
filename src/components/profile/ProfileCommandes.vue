<template>
    <div class="w-11/12 flex item-center justify-center rounded-lg mt-2 h-auto mx-auto">
    <!-- start menu of profile -->
            <div class="w-48 bg-white h-36 mr-8 rounded-lg">
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
                   <p class="text-xs text-center text-red-500 cursor-pointer remark-cities">déconnexion</p>
               </div>
            </div>
    <!-- end menu of profile -->
        <div class="w-4/5 bg-white rounded-lg">
                <div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs remark-cities">Votre commandes</p>
               </div>
               <!-- products -->
               <div v-for="(product , index) in products" :key="index">

                        <div class="flex w-full items-center bg-white rounded-lg p-2">
                                <img 
                                class="object-cover h-full w-28 rounded-lg border border-gray-300" 
                                :src="require('../../assets/images/products/'+product.image)"
                                alt="" />
                                <div class="flex flex-col justify-between p-4 leading-normal">
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

                        <div class="px-2 -mt-4 mb-6">
                            <div class="flex item-center justify-center">
                                <img class="h-4" src="../../assets/images/valideIcon.jpg" alt="">
                                <div class="w-32 h-0.5 mt-2 -ml-1 bg-[#14C626]"></div>
                                
                                <img class="h-4" src="../../assets/images/valideIconGray.svg" alt="">
                                <div class="w-32 h-0.5 mt-2 -ml-1 bg-[#97A999]"></div>

                                <img class="h-4" src="../../assets/images/valideIconGray.svg" alt="">
                                <div class="w-32 h-0.5 mt-2 -ml-1 bg-[#97A999]"></div>

                                <img class="h-4" src="../../assets/images/valideIconGray.svg" alt="">
                                <div class="w-32 h-0.5 mt-2 -ml-1 bg-[#97A999]"></div>
                            </div>
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