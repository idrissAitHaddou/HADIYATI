<template>
    <div class="flex justify-around item-center mt-24">
        <div class="bg-white w-70 h-max rounded-lg">
            <SearchComponent/>
        </div>
        <div class="bg-white w-3/5 rounded-lg pb-3">

                <div class="flex justify-between item-center p-2 border-b-2">
                    <p class="mt-1">Produit recherche 
                        <br>
                        <span class="text-xs">230 resultes</span>
                    </p>
                    <div>Trier par : 
                            <select id="countries" class="text-sm text-gray-900 text-sm border-0 rounded-lg">
                            <option selected disabled>Trier par</option>
                            <option>Prix croisant</option>
                            <option>Prix décroisant</option>
                            </select>
                    </div>
                </div>

                <div class="grid grid-cols-3 p-2 gap-1">
                    <CardComponent/>
                    <CardComponent/>
                    <CardComponent/>
                    <CardComponent/>
                    <CardComponent/>
                    <CardComponent/>
                    <CardComponent/>
                    <CardComponent/>
                    <CardComponent/>
                </div>
                <PaginationComponent/>

        </div>
    </div>
</template>

<script>
import CardComponent from '@/components/search/CardComponent.vue'
import PaginationComponent from '@/components/search/PaginationComponent.vue'
import SearchComponent from '@/components/search/SearchComponent.vue'
export default {
    name : 'searchView',
    components : {
        CardComponent,
        PaginationComponent,
        SearchComponent
    }
}
</script>

<style>


</style>