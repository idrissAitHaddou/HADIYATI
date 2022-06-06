<template>

   <div v-if="$store.state.cart.items.length==0">
     <PanierVideComponent/> 
   </div>
   <div v-else>
     <PanierOrdrsComponent/> 
   </div>

</template>

<script>
import PanierVideComponent from '../components/panier/PanierVideComponent.vue'
import PanierOrdrsComponent from '../components/panier/PanierOrdrsComponent.vue'
export default {
    name : "panierView",
    data(){
        return{
           
        }
    },
    components : {
        PanierVideComponent,
        PanierOrdrsComponent
    }

}
</script>