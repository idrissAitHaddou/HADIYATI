<template>
    <div class="w-11/12 flex item-center justify-center rounded-lg mt-10 h-auto mx-auto">
        <div class="w-4/5 bg-white pb-2 rounded-lg">
               <div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="title-cities">Total : {{$store.state.tottalPrice}} DH</p>
               </div>
               <!-- products -->
               <div v-for="(order,index) in $store.state.cart.items" :key="index" class="flex item-center justify-between px-2 pt-2">
              
                   <div class="border border-orange-200 flex py-1 px-2 w-full h-28 bg-white rounded-lg">
                       <a :href='setRouteCart(order.product[0].id)'>
                       <img 
                            class="w-28 h-full rounded-lg border border-gray-300" 
                            :src="require('../../assets/images/products/'+order.product.images[0].src)"
                            alt=""
                        ></a>
                        <div class="flex flex-col justify-between px-4 py-1 leading-normal">
                            <h5 class="remark-cities w-full text-xs font-bold tracking-tight text-gray-900">{{order.product[0].name}}</h5>
                            <div class="h-8 mt-1 flex item-center justify-start">
                                <div class="flex mt-2 item-center justify-end">
                                    <button @click="addToCart(-1 , order.product[0].id , order.product[0].price)" class="w-6 h-6 bg-orange-300 text-sm text-white font-bold flex item-center justify-center">-</button>
                                    <span class="w-6 h-6 text-sm text-red-600 text-center font-bold"> {{order.quantity}} </span>
                                    <button @click="addToCart(1 , order.product[0].id , order.product[0].price)" class="w-6 h-6 bg-orange-300 text-sm text-white font-bold flex item-center justify-center">+</button>
                                </div>
                                <div class="ml-4 flex item-center">
                                    <span class="remark-cities h-full text-right text-2xl text-gray-600 font-bold mr-3">{{order.price}} Dhs</span>
                                    <span v-if="order.product[0].old_price != 0" class="remark-cities h-full text-sm text-right text-2xl text-gray-600 line-through">{{order.product[0].old_price}} Dhs</span>
                                </div>
                            </div>
                            <div class="flex">
                                <!-- ------------------------------ -->
                                    <button @click="deleteCart(order.product[0].id)" class="btn-distroy tooltip">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                            <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                        <span class="tooltiptext">remove</span>
                                    </button>
                                <!-- --------------------------------- -->
                            </div>
                        </div>
                    </div>
               
               </div>
              



        </div>
        <div class="w-48 bg-white h-56 ml-8 rounded-lg">
               <div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="title-cities">RÉSUMÉ DU PANIER</p>
               </div>
                <div class="flex item-center justify-between border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <span class="text-xs remark-cities">Sous-total</span>
                   <span class="text-xs remark-cities">{{$store.state.tottalPrice}} Dhs</span>
               </div>
               <div class="flex p-1">
                   <div class="w-16"><img id="icon-valid" src="../../assets/images/valideIcon.jpg" width="20" height="20" alt=""></div>
                   <p id="attention" class="leading-normal remark-cities">
                        N'oubliez pas que nous pouvons organiser une fête pour vous et pas seulement acheter
                   </p>
               </div>
                <p class="text-xs w-full pl-8 mt-2 pb-2 border border-l-0 border-r-0 border-t-0 border-b-gray-300 remark-cities">hadiyati.ma</p>
                <div class="w-11/12 mx-auto my-2">
                   <router-link v-if="$store.state.id_user_login!=0" to="/command-adress">
                       <button class="w-full p-3 border hover:border-gray-600 font-bold hover text-xs whitespace-nowrap rounded-lg text-gray-900 remark-cities">COMMANDER ({{$store.state.tottalPrice}} DHS)</button>
                   </router-link> 
                   <button v-if="$store.state.id_user_login==0" class="w-full p-3 bg-white border hover:font-bold hover:border-gray-600 text-xs whitespace-nowrap rounded-lg text-gray-500 remark-cities">COMMANDER ({{$store.state.tottalPrice}} DHS)</button>
                </div>  

        </div>
    </div>
</template>
<script>
export default {
    data(){

    },
    created(){
        console.log('--------------  store component  -------------------')
        console.log(this.$store.state.cart.items)
    },
    methods : {

        addBackgroundLiner(background){
             return ' background: linear-gradient(135deg, '+background+', #ffffff 100%)';
        },
        addBorderColor(background){
             return ' border : 1px solid '+background;
        },
        addToCart(quantity , id , price){
            
                const exists = this.$store.state.cart.items.filter(ele => ele.product[0].id === id)
                if(exists.length){
                    if(exists[0].quantity==0 && quantity==1 ){
                        const item = {
                            product : exists[0].product,
                            price : price,
                            quantity : quantity
                        }
                        this.$store.commit('addToCart' , item)
                        this.$store.commit('calculePrice')
                    }else if(exists[0].quantity>0){
                        const item = {
                            product : exists[0].product,
                            price : price,
                            quantity : quantity
                        }
                        this.$store.commit('addToCart' , item)
                        this.$store.commit('calculePrice')
                    }
                }
        },
        setRouteCart(id){
           return '/cart/'+id
        },
        deleteCart(id){
           this.$store.commit('deleteCart' , id)
           this.$store.commit('calculePrice')
        }

  }
}
</script>

<style>

/* From uiverse.io by @hannahyockel */
.btn-distroy {
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 padding: 5px;
 border: 0px solid transparent;
 background-color: rgba(100,77,237,0.08);
 border-radius: 1.25em;
 transition: all 0.2s linear;
}

.btn-distroy:hover {
 box-shadow: 3.4px 2.5px 4.9px rgba(0, 0, 0, 0.025),
  8.6px 6.3px 12.4px rgba(0, 0, 0, 0.035),
  17.5px 12.8px 25.3px rgba(0, 0, 0, 0.045),
  36.1px 26.3px 52.2px rgba(0, 0, 0, 0.055),
  99px 72px 143px rgba(0, 0, 0, 0.08);
}

.tooltip {
 position: relative;
 display: inline-block;
}

.tooltip .tooltiptext {
 visibility: hidden;
 width: 4em;
 background-color: rgba(0, 0, 0, 0.253);
 color: #fff;
 text-align: center;
 border-radius: 6px;
 padding: 2px 0;
 position: absolute;
 z-index: 1;
 top: 16%;
 left: 110%;
}

.tooltip .tooltiptext::after {
 content: "";
 position: absolute;
 top: 50%;
 right: 100%;
 margin-top: -5px;
 border-width: 5px;
 border-style: solid;
 border-color: transparent rgba(0, 0, 0, 0.253) transparent transparent;
}

.tooltip:hover .tooltiptext {
 visibility: visible;
}


/* ------------------------------------------------------------------- */
.global-shadow{
     box-shadow: 10px 10px 9px #c5c5c5,
    -10px -10px 9px #ffffff;
}
#attention{
    font-size: 10px !important;
}


/* From uiverse.io */
.btnDeleteOrder {
 width: 130px;
 height: 30px;
 cursor: pointer;
 display: flex;
 align-items: center;
 justify-content:start;
 border: 1px solid white;
 border-radius: 5px;
 /* box-shadow: 1px 1px 3px rgba(0,0,0,0.15); */
}

.btnDeleteOrder, .btnDeleteOrder span {
 transition: 200ms;

}

.btnDeleteOrder .text {
 font-weight: bold;
 transform: translateX(10px);
}

.btnDeleteOrder .icon {
 position: absolute;
 border-left: 1px solid white;
 transform: translateX(100px);
 height: 20px;
 width: 20px;
 display: flex;
 align-items: center;
 justify-content: center;
}

.btnDeleteOrder svg {
 width: 15px;
 fill: rgb(178, 170, 170);
 margin-left: 3px;
}

.btnDeleteOrder:hover {
 background: #ff3636;
}

.btnDeleteOrder:hover .text {
 color: transparent;
}

.btnDeleteOrder:hover .icon {
 width: 130px;
 border-left: none;
 transform: translateX(0);
}

.btnDeleteOrder:focus {
 outline: none;
}

.btnDeleteOrder:active .icon svg {
 transform: scale(0.8);
}


</style>