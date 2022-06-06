<template>


    <div class="w-11/12 mx-auto flex item-center justify-between py-3">
        <span class="remark-cities text-gray-500">
            FINALISATION DE LA COMMANDE
        </span>
        <span class="remark-cities text-gray-500">
            Total : {{$store.state.tottalPrice}} DH
        </span>
    </div>
                
    <div class="w-11/12 flex flex-col item-center bg-white border rounded-lg mt-2 h-96 mx-auto">
        <div class="flex item-center justify-between border border-l-0 border-r-0 border-t-0 border-b-gray-300 w-full h-10 p-2">
            <div class="flex item-center pt-1">
                
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="remark-cities">ADRESSE</span>
                </p>
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="remark-cities">MODE DE LIVRAISON</span>
                </p>
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="remark-cities">MODE DE PAIEMENT</span>
                </p>

            </div>
            <div class="pb-1">
                <button @click="validTypePayment()" class="remark-cities cssbuttons-io-button -mt-1"> Suivant
                    <div class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                    </div>
                </button>
            </div>
        </div>
        <form action="">
        <div class="flex item-center justify-between p-4">

                    <div class="w-1/2 mt-3 border border-t-0 border-l-0 border-b-0 mr-5">


                                <p class="remark-cities text-xs">Comment voulez-vous que votre commande soit livrée ?</p>
                                <p class="flex mr-5 text-xs mt-6">
                                    <input id="check-livraison" name="checkTypePayment" checked type="radio" class="w-4 h-4 mr-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <span class="remark-cities text-xs">MODE DE PAIEMENT</span>
                                </p>
                                <p class="">
                                    <span class="remark-cities text-xs text-gray-400">Livré entre le</span>
                                    <span class="remark-cities text-xs"> mardi 29 mars</span>
                                    <span class="remark-cities text-xs text-gray-400"> et le</span>
                                    <span class="remark-cities text-xs"> jeudi 31 mars</span>
                                    <span class="remark-cities text-xs text-gray-400"> pour</span>
                                    <span class="remark-cities text-xs text-red-500"> 30.00  Dhs</span>
                                </p>
                                <div class="w-4/5 mt-3 border p-4">
                                    <ul id="cas-command">
                                        <li class="remark-cities text-xs">
                                            Dans le cas d’une commande composée (plus d’un article), la
                                            livraison pourrait se faire de façon séparée (colis livrés à des 
                                            périodes différentes).
                                        </li>
                                        <li class="remark-cities text-xs">
                                            Livraison gratuite sur les grandes villes
                                        </li>
                                    </ul>
                                </div>

                        

                    </div>
                    <div class="w-1/2">
                        
                        <p class="flex mr-5 text-xs mt-6">
                            <input id="check-payment" name="checkTypePayment" type="radio" class="w-4 h-4 mr-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <span class="remark-cities text-xs">MODE DE PAIEMENT</span>
                        </p>
                        <p class="">
                            <span class="remark-cities text-xs text-gray-400">Prêt à être récupéré entre</span>
                            <span class="remark-cities text-xs"> mardi 29 mars</span>
                            <span class="remark-cities text-xs text-gray-400"> et le</span>
                            <span class="remark-cities text-xs"> jeudi 31 mars</span>
                            <span class="remark-cities text-xs text-gray-400"> pour</span>
                            <span class="remark-cities text-xs text-red-500"> 00.00  Dhs</span>
                        </p>
                        <div class="w-4/5 mt-3 border p-4">
                            <ul id="cas-command">
                                <li class="remark-cities text-xs">
                                    Bien sûr, récupéré sera gratuite
                                </li>
                                <li class="remark-cities text-xs">
                                    Bien sûr, récupéré sera gratuite
                                </li>
                            </ul>
                        </div>
                        <p class="remark-cities text-xs text-green-500 mt-6">B : Vous pouvez récupérer directement à notre centre</p>
                    </div>

        </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{

        }
    },
    beforeCreate(){
        if(this.$store.state.totalLength==0){
            window.location = '/'
        }
    },
    methods : {
            validTypePayment(){
                if(document.getElementById('check-livraison').checked){
                    const item = {
                        typePayment : 'livraison'
                    }
                    this.$store.commit('addTypePaymentToCart' , item)
                    this.addCommand()
                }else if(document.getElementById('check-payment').checked){
                    const item = {
                       typePayment : 'payment'
                    }
                    this.$store.commit('addTypePaymentToCart' , item)
                    window.location.href = 'http://localhost:8080/command-payment'
                }
            },
            async addCommand(){
            
                let formdata = new FormData()
                            formdata.append('tottalPrice' , this.$store.state.tottalPrice)
                            formdata.append('tel' , this.$store.state.tel)
                            formdata.append('ville' , this.$store.state.ville)
                            formdata.append('adress' , this.$store.state.adress)
                            formdata.append('typePayment' , this.$store.state.typePayment)
                            formdata.append('id_user_login' , this.$store.state.id_user_login)
                const response = await  axios.post('http://localhost/hadiyati/add-command' , formdata)
                const data = await JSON.parse(JSON.stringify(response.data))
                console.log(data)


                this.$store.state.cart.items.forEach(async (element) => {
                    let formdataProduct = new FormData()
                    formdataProduct.append('id_product' , element.product[0].id) 
                    formdataProduct.append('quantity' , element.quantity)
                    formdataProduct.append('price' , element.price)
                    const responseP = await axios.post('http://localhost/hadiyati/add-product-command' , formdataProduct)
                    const dataP = await JSON.parse(JSON.stringify(responseP.data))
                    console.log(dataP)
                })
                this.$store.commit('destroyStore')
                 window.location.href = 'http://localhost:8080/command-valid'


            }
    }
}
</script>


<!-- /command-payment -->
<style>

 #cas-command{
     list-style-type:disc;
 }

</style>