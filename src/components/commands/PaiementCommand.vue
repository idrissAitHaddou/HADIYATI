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
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="remark-cities">MODE DE LIVRAISON</span>
                </p>
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    <span class="remark-cities">MODE DE PAIEMENT</span>
                </p>

            </div>

        </div>
        <div class="flex item-center justify-between p-4">

            <div class="mt-3 w-4/5 mx-auto">
                <p class="remark-cities text-xs w-full text-center">Paiement par carte bancaire (facile, sécurisé et permet d'éviter tout contact avec de la monnaie ou des billets)</p>
                <div class="flex item-center justify-center">
                      <img class="mt-4 mr-3" src="../../assets/images/visaFooter.svg" width="30" height="30" alt="">
                      <img class="mt-4" src="../../assets/images/seVisaFooter.svg" width="30" height="30" alt="">
                </div>
                <div class="mt-10 w-64 mx-auto">
                    <div class="mb-6">
                        <label for="numCart" class="block mb-2 text-xs font-medium text-gray-900 dark:text-gray-300">Numéro de la carte *</label>
                        <input @keyup="changeBorder(numCart , 'numCart')" v-model="numCart" type="text" id="numCart" class="remark-cities focus:border-transparent focus:ring-0 bg-gray-50 w-full p-2.5 border rounded-lg" placeholder="" required>
                    </div>
                    <button @click="validPayment()" class="bg-white border border-orange-300 text-gray-900 hover:font-bold p-2 rounded-lg text-xs w-full">PAYER MAINTENANT: {{$store.state.tottalPrice}} DH</button>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            numCart : ''
        }
    },
    beforeCreate(){
        if(this.$store.state.totalLength==0){
            window.location = '/'
        }
    },
    methods : {
        changeBorder(value , id){
            const input = document.getElementById(id)
            if(value==''){
                input.style.border = '1px solid red'
            }else{
                input.style.border = '1px solid green'
            }
        },
        validPayment(){
                if(
                    this.$store.state.typePayment!=''
                    && this.$store.state.tel!=''
                    && this.$store.state.ville!=''
                    && this.$store.state.adress!=''
                    && this.numCart!=''
                 ){
                     this.addCommand()
                  }
        },
      async  addCommand(){
            
                let formdata = new FormData()
                            formdata.append('tottalPrice' , this.$store.state.tottalPrice)
                            formdata.append('tel' , this.$store.state.tel)
                            formdata.append('ville' , this.$store.state.ville)
                            formdata.append('adress' , this.$store.state.adress)
                            formdata.append('typePayment' , this.$store.state.typePayment)
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

<style>

 #cas-command{
     list-style-type:disc;
 }

</style>