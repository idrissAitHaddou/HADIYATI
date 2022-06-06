<template>
    <div class="flex justify-around item-center mt-24">
       
        <div class="bg-white px-2 py-2 w-70 h-max rounded-lg">
            <!-- ------------------------ start search detaills ------------------------------ -->

                    <div class="flex flex-col">
                        <div class="p-3 flex item-center justify-center">
                                <label for="table-search" class="sr-only remark-cities">Search</label>
                                <div class="relative mt-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input v-model="nameSearch" type="text" id="name-search" class="remark-cities bg-gray-50 w-60 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                </div>
                        </div>

                        <div class="flex flex-col item-center justify-center">
                            <div class="block w-full font-bold text-gray-600 bg-title p-2 title-cities"><h1>Prix (MAD)</h1></div>
                            <div class="flex item-center justify-between p-2">
                                <span class="text-sm remark-cities"> {{searchDetaills.minPrice}} DH</span>
                                <span class="text-sm remark-cities"> {{maxPrice}} DH</span>
                            </div>
                            <div class="relative pt-1 px-2 mb-4">
                                
                                <input
                                    type="range"
                                    :min="searchDetaills.minPrice"
                                    :max="searchDetaills.maxPrice"
                                    v-model="maxPrice"
                                    @change="updateProductsPriceToSerach()"
                                    class="
                                    form-range
                                    appearance-none
                                    w-full
                                    h-1
                                    p-0
                                    bg-orange-200
                                    focus:outline-none focus:ring-0 focus:shadow-none
                                    "
                                    id="customRange1"
                                />
                            </div>
                        </div>


                <!-- les couleurs -->
                        <div class="block w-full font-bold text-gray-600 bg-title p-2 mb-2 title-cities"><h1>Coleur</h1></div>
                        <div class="flex h-40 overflow-y-scroll flex-col item-center justify-center py-3">
                            <br><br><br>
                            
                            <template v-for="color in searchDetaills.colors" :key="color.id">
                                <div class="flex item-center justify-between p-2">
                                    <span class=" remark-cities"> {{color.name}} </span>
                                    <input id="checkbox-1" @change="getColorsChecked($event , color.name , color.id)" :value="color.id" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>

                            </template>

                        </div>

                <!-- les types -->
                        <div class="flex flex-col item-center justify-center">

                            <div class="block w-full font-bold text-gray-600 bg-title p-2 title-cities"><h1>Type</h1></div>
                             
                            <template v-for="groupe in searchDetaills.groupes" :key="groupe.id">

                                <div class="flex item-center justify-between p-2">
                                    <span class=" remark-cities"> {{groupe.name}} </span>
                                    <input id="checkbox-1" @change="getGroupesChecked($event , groupe.name , groupe.id)" :value="groupe.id" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>

                            </template>

                        </div>

                <!-- les Categorie -->
                        <div class="block w-full font-bold text-gray-600 bg-title p-2 mb-2 title-cities"><h1>Categorie</h1></div>
                        <div class="flex h-40 overflow-y-scroll flex-col item-center justify-center py-3">
                            <br><br><br><br><br>
                            <template v-for="ourCategorie in searchDetaills.categories" :key="ourCategorie.id">

                                <div class="flex item-center justify-between p-2">
                                    <span class=" remark-cities"> {{ourCategorie.name}} </span>
                                    <input v-if="categorie===ourCategorie.id" checked :id="ourCategorie.id" @change="getCategoriesChecked($event , ourCategorie.name , ourCategorie.id)" :value="ourCategorie.id" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <input v-else-if="categorie!=ourCategorie.id" :id="ourCategorie.id" @change="getCategoriesChecked($event , ourCategorie.name , ourCategorie.id)" :value="ourCategorie.id" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>

                            </template>

                        </div>

                <!-- les Modes -->
                        <div class="block w-full font-bold text-gray-600 bg-title p-2 mb-2 title-cities"><h1>Mode</h1></div>
                        <div class="flex h-40 overflow-y-scroll flex-col item-center justify-center py-3">
                            
                            <template v-for="mode in searchDetaills.modes" :key="mode.id">
                                <div class="flex item-center justify-between p-2">
                                    <span class=" remark-cities"> {{mode.name}} </span>
                                    <input id="checkbox-1" @change="getModesChecked($event , mode.name , mode.id)" :value="mode.id" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>

                            </template>

                        </div>

                    </div>

            <!-- ------------------------ end search detaills ------------------------------ -->
        </div>
        <div class="bg-white w-3/5 rounded-lg pb-3">

                <div class="flex justify-between item-center p-2 border-b-2">
                    <p class="mt-1 title-cities">Produit recherche 
                        <br>
                        <span class="text-xs remark-cities">{{products.length}} resultes</span>
                    </p>
                    <div class="title-cities">Trier par : 
                            <select @change="ChangeOrder()" v-model="orderBy" id="countries" class="text-sm text-gray-900 text-sm border-0 rounded-lg">
                            <option value="" selected disabled>Trier par</option>
                            <option value="ASC">Prix croisant</option>
                            <option value="DESC">Prix décroisant</option>
                            </select>
                    </div>
                </div>

                <template v-if="products.length==0">
                    <h1 class="remark-cities text-4xl py-8 w-full text-center">Aucun produit</h1>
                </template>
                <div class="grid grid-cols-3 p-2 gap-1">
                    <template v-if="products.length>0">
                        <template v-for="product in products" :key="product.id">
                            <CardComponent :background="product.background" :id="product.id" :src="product.images[0].src" :name="product.name" :price="product.price" :oldPrice="product.old_price" :numLove="product.num_love"/>
                        </template>
                    </template>
                </div>
                <!-- -------------------- start pagination ------------------ -->

                    <div class="p-2 flex item-center justify-center">
                        <nav aria-label="Page navigation example">
                            <ul class="flex -space-x-px">

                                <li>
                                    <a v-if="pageNumber>1 && products.length>0" @click="pageNumber = pageNumber - 1;ChangePageNumber(pageNumber)" href="#" class="leading-tight">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </a>
                                    <a v-if="pageNumber==1 && products.length>0" href="#" class="leading-tight">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </a>
                                </li>

                                <template v-for="item in numberPages" :key="item">
                                    <li v-if="item<6">
                                        <a :id="getId(item)" @click="pageNumber = item;ChangePageNumber(pageNumber);changStyle(item)" href="#" class="pagination-link leading-tight m-2">
                                                {{item}}
                                        </a>
                                    </li>
                                </template>

                                <li>
                                    <a v-if="pageNumber<numberPages && products.length>0" @click="pageNumber = pageNumber + 1;ChangePageNumber(pageNumber)" href="#" class="leading-tight">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                    <a v-if="pageNumber==numberPages && products.length>0" href="#" class="leading-tight">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>

                <!-- -------------------- end pagination ------------------ -->

        </div>
 </div>

</template>

<script>
import axios from 'axios'
import CardComponent from '@/components/search/CardComponent.vue'
export default {
    props:{
     categorie: {
            type : Number,
            required : false
     },
     nameProduct: {
            type : String,
            required : false
     },
   },
    data(){
    return{
       pageNumber : 1,
       perPage: 9,
       numberPages : 0,

       searchDetaills : [],
       products : [],
       allProducts : [],
       currentPage: 1,
       pageNumberPage : 1,
       totalIProducts : 0,
       orderBy : '',

       nameSearch : '',
       maxPrice : 0,
       colorsSearch : [],
       groupesSearch : [],
       categoriesSearch : [],
       modesSearch : [],

       ctrToPropsCreated : 0,

       idClassActive : 0,

    }
   },
   watch:{
       nameSearch(){
           this.updateProductsPriceToSerach()
       },
       nameProduct(){
           this.nameSearch = this.nameProduct
           this.updateProductsPriceToSerach()
       },
       categorie(){
                const testCategori = this.categoriesSearch.filter(item => item.id===this.categorie)
                if(testCategori.length==0){
                    this.categoriesSearch.push({id : this.categorie , categorie : '' , state : true})
                }
                this.updateProductsPriceToSerach()
       },
   }
   ,
   created(){

       this.getProducts()
      
   },
    components : {
         CardComponent,
    },

   methods:{

       changStyle(id){
            const link = document.getElementById('link'+id)
            if(this.idClassActive!=0){
                  const oldLink = document.getElementById('link'+this.idClassActive)
                        oldLink.classList.toggle('pagination-link-active')
            }
            link.classList.toggle('pagination-link-active')
            this.idClassActive = id
       },
        getId(id){
            return 'link'+id
        },
        getPropsToSearch(){
            if(this.nameProduct!=''){
                    this.nameSearch = this.nameProduct
                    this.updateProductsPriceToSerach()
            }
            if(this.categorie>0){
                const testCategori = this.categoriesSearch.filter(item => item.id===this.categorie)
                if(testCategori.length==0){
                    this.categoriesSearch.push({id : this.categorie , categorie : '' , state : true})
                }
                this.updateProductsPriceToSerach()
            }
        },
        ChangePageNumber(val){
           this.totalIProducts = this.allProducts.length
           this.numberPages = Math.ceil(this.totalIProducts / this.perPage)
           this.pageNumberPage = val
           var page =(this.pageNumberPage-1)*9
           var ctr=0 
           this.products = []
            for(let i=0 ; i<this.allProducts.length ; i++)
            {
                if(i>=page && ctr<9){
                    ctr=ctr+1
                    this.products.push(this.allProducts[i])
                }
            }

        },
        onPageChange(page) {
            this.currentPage = page;
        },
        ChangeOrder(){
            if(this.orderBy==='ASC'){
                this.products = this.products.sort((a,b) => a.price - b.price);
            }else if(this.orderBy==='DESC'){
                this.products = this.products.sort((a,b) => a.price - b.price);
                this.products = this.products.reverse()
            }

        },
        getProducts(){
            axios.get('http://localhost/hadiyati/products').then((response) => {
                    this.allProducts = response.data
                    this.totalIProducts = this.allProducts.length
                    if(this.ctrToPropsCreated==0){
                        this.getPropsToSearch()
                    }
                    this.ctrToPropsCreated=this.ctrToPropsCreated+1
                    if(this.searchDetaills.length==0){
                        this.getSearchDetaills()
                    }
                    
                    
            }).catch((error) => {
                console.log(error);
            })
        },
        getSearchDetaills(){

                // console.log(this.allProducts)
                axios.get('http://localhost/hadiyati/search-detaills').then((response) => {
                    this.searchDetaills = response.data
                    this.maxPrice = this.searchDetaills.maxPrice
                    this.ChangePageNumber(1)
                    
                }).catch((error) => {
                    console.log(error);
                })
        },
        getColorsChecked(event , color , id){
            if(event.target.checked){
                this.colorsSearch.push({id : id , color : color , state : event.target.checked})
            }else{
                this.colorsSearch = this.colorsSearch.filter(item => item.id !== id)
            }
            this.updateProductsPriceToSerach()
        },
        getGroupesChecked(event , groupe , id){
            if(event.target.checked){
                this.groupesSearch.push({id : id , groupe : groupe , state : event.target.checked})
               }else{
                   this.groupesSearch = this.groupesSearch.filter(item => item.id !== id)
               }
            this.updateProductsPriceToSerach()
        },
        getCategoriesChecked(event , categorie , id){
            if(event.target.checked){
                const testCategori = this.categoriesSearch.filter(item => item.id===id)
                if(testCategori.length==0){
                     this.categoriesSearch.push({id : id , categorie : categorie , state : event.target.checked})
                }
            }else{
                this.categoriesSearch = this.categoriesSearch.filter(item => item.id !== id)
            }
            this.updateProductsPriceToSerach()
        },
        getModesChecked(event , mode , id){
            if(event.target.checked){
                this.modesSearch.push({id : id , mode : mode , state : event.target.checked})
               }else{
                   this.modesSearch = this.modesSearch.filter(item => item.id !== id)
               }
                this.updateProductsPriceToSerach()
        },
        updateProductsPriceToSerach(){
            this.getProducts()
            var OurProduct2=[]
            var OurProduct1=[]
            var findProduct=[]
            
            
            // search with colors
            if(this.colorsSearch.length>0){
                 for(let i=0 ; i<this.colorsSearch.length ; i++){ 
                    
                    OurProduct1 = this.allProducts.filter(item => {
                        return  item.id_color === this.colorsSearch[i].id && item.price <= this.maxPrice
                    })
                    for(let n=0 ; n<OurProduct1.length ; n++){
                        findProduct = OurProduct2.filter(element => element.id === OurProduct1[n].id)
                        if(findProduct.length==0){
                            OurProduct2.push(OurProduct1[n])
                        }
                    }
                 }
                 this.allProducts=OurProduct2
                
            }
            // search with groupes
            if(this.groupesSearch.length>0){
                
                var isProducts=[]
                 for(let i=0 ; i<this.groupesSearch.length ; i++){ 
                     
                    if(this.colorsSearch.length>0){
                         OurProduct1 = OurProduct2.filter(item => {
                             return  item.id_group === this.groupesSearch[i].id && item.price <= this.maxPrice
                        })
                    }else{
                        OurProduct1 = this.allProducts.filter(item => {
                            return  item.id_group === this.groupesSearch[i].id && item.price <= this.maxPrice
                        })
                    }
                    if(OurProduct1.length>0){
                        for(let n=0 ; n<OurProduct1.length ; n++){
                            isProducts.push(OurProduct1[n])
                        }
                    }else{
                        OurProduct2=[]
                    }
                 }
                 OurProduct2 = isProducts
                 this.allProducts=OurProduct2
                
            }
            // search with categories
            if(this.categoriesSearch.length>0){
                
                var isProductsCat=[]
                 for(let i=0 ; i<this.categoriesSearch.length ; i++){ 
                     
                    if(this.colorsSearch.length>0){
                         OurProduct1 = OurProduct2.filter(item => {
                             return  item.id_categorie === this.categoriesSearch[i].id && item.price <= this.maxPrice
                        })
                    }else{
                        OurProduct1 = this.allProducts.filter(item => {
                            return  item.id_categorie === this.categoriesSearch[i].id && item.price <= this.maxPrice
                        })
                    }
                    if(OurProduct1.length>0){
                        for(let n=0 ; n<OurProduct1.length ; n++){
                            isProductsCat.push(OurProduct1[n])
                        }
                    }else{
                        OurProduct2=[]
                    }
                 }
                 OurProduct2 = isProductsCat
                 this.allProducts=OurProduct2
                
            }
            // search with modes
            if(this.modesSearch.length>0){
                
                var isProductsModes=[]
                 for(let i=0 ; i<this.modesSearch.length ; i++){ 
                     
                    if(this.colorsSearch.length>0){
                         OurProduct1 = OurProduct2.filter(item => {
                             return  item.id_country_mode === this.modesSearch[i].id && item.price <= this.maxPrice
                        })
                    }else{
                        OurProduct1 = this.allProducts.filter(item => {
                            return  item.id_country_mode === this.modesSearch[i].id && item.price <= this.maxPrice
                        })
                    }
                    if(OurProduct1.length>0){
                        for(let n=0 ; n<OurProduct1.length ; n++){
                            isProductsModes.push(OurProduct1[n])
                        }
                    }else{
                        OurProduct2=[]
                    }
                 }
                 OurProduct2 = isProductsModes
                 this.allProducts=OurProduct2
                
            }
            // search with name
            if(this.nameSearch!=''){
               
                var isProductsName=[]
                     
                    if(this.colorsSearch.length>0){
                         OurProduct1 = OurProduct2.filter(item => {
                             return item.name.toLowerCase().indexOf(this.nameSearch.toLowerCase())!=-1 && item.price <= this.maxPrice
                        })
                    }else{
                        OurProduct1 = this.allProducts.filter(item => {
                             return item.name.toLowerCase().indexOf(this.nameSearch.toLowerCase())!=-1 && item.price <= this.maxPrice
                        })
                    }
                    if(OurProduct1.length>0){
                        for(let n=0 ; n<OurProduct1.length ; n++){
                            isProductsName.push(OurProduct1[n])
                        }
                    }else{
                        OurProduct2=[]
                    }
                 OurProduct2 = isProductsName
                 this.allProducts=OurProduct2
                
            }
            if(this.groupesSearch.length==0 && this.colorsSearch.length==0 && this.categoriesSearch.length==0 && this.modesSearch.length==0){
                this.allProducts = this.allProducts.filter(item => item.price <= this.maxPrice)
            }

            this.ChangePageNumber(1)
        }
       
   },

}
</script>

<style>

/* From uiverse.io by @barisdogansutcu */
.pagination-link {
 font-size: 13px;
 font-weight: 500;
 text-transform: uppercase;
 color: #7e97b8;
 background-color: #faf6f1;
 border-style: solid;
 border-width: 2px 2px 2px 2px;
 border-color: rgba(255, 255, 255, 0.975);
 border-radius: 40px 40px 40px 40px;
 padding: 10px 15px;
 /* padding: 16px 24px 16px 28px; */
 transform: translate(0px, 0px) rotate(0deg);
 transition: 0.2s;
 box-shadow: -4px -2px 16px 0px #ffffff, 4px 2px 16px 0px rgba(224, 229, 236, 0.48);
}

.pagination-link-active {
 color: white;
 background-color: #a3c1c4;
 /* box-shadow: -2px -1px 8px 0px #ffffff, 2px 1px 8px 0px rgb(95 157 231 / 48%); */
}

.pagination-link:active {
 box-shadow: none;
}

</style>