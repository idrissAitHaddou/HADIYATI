<template>

    <div class="w-11/12 mx-auto flex md:flex-row flex-col item-center justify-between py-3">
        <span class="remark-cities text-gray-500">
            FINALISATION DE LA COMMANDE
        </span>
        <span class="remark-cities text-gray-500">
            Total : {{$store.state.tottalPrice}} DH
        </span>
    </div>
                
    <div class="w-11/12 flex flex-col item-center bg-white border rounded-lg mt-2 h-auto md:h-96 mx-auto">
        <div class="flex item-center justify-between border border-l-0 border-r-0 border-t-0 border-b-gray-300 w-full md:h-10 h-auto p-2">
            <div class="flex md:flex-row flex-col item-center pt-1">
                <p class="flex mr-5 text-xs">
                    <svg class="h-3 mt-0.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
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
            <div class="flex item-center">
                <button @click="addAdressInfoToCart()" class="remark-cities cssbuttons-io-button md:-mt-1 mt-2"> Suivant
                    <div class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                    </div>
                </button>

            </div>
        </div>
        <div class="flex item-center justify-between p-4">
            <div class="md:w-1/2 w-full">
                <form class="md:w-9/12 w-full mx-auto mt-4">
                    <div class="mb-6 w-11/12 md-full mx-auto">
                        <label for="email" class="remark-cities block mb-2 text-xs font-medium text-gray-900 dark:text-gray-300">Numéro de téléphone mobile *</label>
                        <input @keyup="changeBorder(tel , 'tel')" v-model="tel" type="text" id="tel" class="remark-cities focus:border-transparent focus:ring-0 bg-gray-50 w-full p-2.5 border rounded-lg" placeholder="" required>
                    </div>
                  
                    <div class="mb-6 w-11/12 md-full mx-auto">
                        <label for="password" class="remark-cities block mb-2 text-xs font-medium text-gray-900 dark:text-gray-300">Ville *</label>
                        <select @change="changeBorder(ville , 'cities')" v-model="ville" id="cities" class="remark-cities focus:border-transparent focus:ring-0 bg-gray-50 w-full p-2.5 border rounded-lg">
                           <option value="" disabled>select la ville</option>
                            <template v-for="(city,index) in citiesData" :key="index">
                                 <option :value="city">{{city}}</option>                       
                            </template>
                        </select>                     
                    </div>
                     <div class="mb-6 w-11/12 md-full mx-auto">
                        <label for="email" class="remark-cities block mb-2 text-xs font-medium text-gray-900 dark:text-gray-300">Adresse *</label>
                        <textarea @keyup="changeBorder(adress , 'adress')" v-model="adress" id="adress" rows="2" class="remark-cities focus:border-transparent focus:ring-0 bg-gray-50 w-full p-2.5 border rounded-lg" placeholder="Rue / Appartement / Suite / Bloc / Bâtiment" required></textarea>
                    </div>
                </form>
            </div>
            <div class="w-1/2 md:block hidden">
                <div class="w-9/12 mx-auto">
                        <img src="../../assets/images/payment.png" alt="" />
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
           tel : '',
           ville : '',
           adress : '',
           citiesData : [],
           errorTel : '',
           errorCity : '',
           errorAdress : '',
       }
    },
    beforeCreate(){
        if(this.$store.state.totalLength==0){
            window.location = '/'
        }
    },
    created(){
        this.apiCitiesMorocco()
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
        apiCitiesMorocco(){
                axios.post('https://countriesnow.space/api/v0.1/countries/cities' , 
                    {
                        country: "Morocco"
                    }
                ).then((response) => {
                            this.citiesData = response.data.data
                        }).catch((error) => {
                            console.log(error);
                })
                this.tel = this.$store.state.tel
                this.ville = this.$store.state.ville
                this.adress = this.$store.state.adress
        },
        addAdressInfoToCart(){
            if(this.tel!='' && this.ville!='' && this.adress!=''){
                const item = {
                    tel : this.tel,
                    ville : this.ville,
                    adress : this.adress,
                }
                this.$store.commit('addAdressInfoToCart' , item)
                window.location.href = 'http://localhost:8080/command-livraison'
            }
        },



    }
}
</script>


<style>

/* From uiverse.io by @adamgiebl */
 .cssbuttons-io-button {
 background: #92d4f1;
 color: white;
 padding: 0.35em;
 padding-left: 1.2em;
 font-size: 11px;
 font-weight: 500;
 border-radius: 0.9em;
 border: none;
 letter-spacing: 0.05em;
 display: flex;
 align-items: center;
 /* box-shadow: inset 0 0 1.6em -0.6em #714da6; */
 overflow: hidden;
 position: relative;
 height: 2.8em;
 padding-right: 3.3em;
 margin-left: 5px;
}

.cssbuttons-io-button .icon {
 background: white;
 margin-left: 1em;
 position: absolute;
 display: flex;
 align-items: center;
 justify-content: center;
 height: 2.2em;
 width: 2.2em;
 border-radius: 0.7em;
 /* box-shadow: 0.1em 0.1em 0.6em 0.2em #7b52b9; */
 right: 0.3em;
 transition: all 0.3s;
}

.cssbuttons-io-button:hover .icon {
 width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
 width: 1.1em;
 transition: transform 0.3s;
 color: #7b52b9;
}

.cssbuttons-io-button:hover .icon svg {
 transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
 transform: scale(0.95);
}





</style>