<template>
  <div
    class="w-11/12 flex md:flex-row flex-col item-center justify-center rounded-lg mt-2 h-auto mx-auto"
  >
    <!-- start menu of profile -->
    <div class="w-full md:w-48 bg-white h-36 mr-8 rounded-lg mb-4 md:mb-0">
      <router-link to="/"
        ><div
          class="border border-b-gray-300 p-2"
        >
          <p class="text-xs remark-cities">Votre compte Hadiyati</p>
        </div></router-link
      >
      <router-link to="/ajouter-produit"
        ><div class="p-2 mt-2 border border-l-red-500 border-r-0 border-t-0">
          <p class="text-xs remark-cities">Ajouter Produit</p>
        </div></router-link
      >
      <router-link to="/admin-pass"
        ><div
          class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2"
        >
          <p class="text-xs remark-cities">Modifier votre mot de passe</p>
        </div></router-link
      >
      <div class="mt-1 p-2">
        <p @click="logout()" class="text-xs text-center text-red-500 cursor-pointer remark-cities">
          déconnexion
        </p>
      </div>
    </div>
    <!-- end menu of profile -->
    <div class="w-full md:w-4/5 mx-auto md:mx-0 bg-white rounded-lg">
      <div
        class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2"
      >
        <p class="remark-cities text-xs">Informations personnelles et l'adresse</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-14 px-8 mt-2">
          <div class="relative z-0 my-6 w-full group">
            <input
            @keyup="changeBorder(name , 'name')"
            v-model="name"
              type="text"
              name="name"
              id="name"
              class="remark-cities block mb-3 py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=""
              required
            />
            <label
              for="floating_first_name"
              class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >Name</label>
        </div>
        <div class="relative z-0 mb-6 md:my-6 w-full group">
          <input
            @keyup="changeBorder(price , 'price')"
            v-model="price"
              type="text"
              name="price"
              id="price"
              class="remark-cities block mb-3 py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=""
              required
          />
          <label
            for="floating_last_name"
            class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Price</label
          >
        </div>
      </div>
      <div class="grid grid-cols-2 gap-14 px-8">
            <div class="relative z-0 mb-6 w-full group">
                <select
                @change="changeBorder(categorie , 'categorie')"
                    v-model="categorie"
                    id="categorie"
                    class="border remark-cities py-2.5 focus:border-transparent text-xs focus:ring-0 bg-gray-50 w-full p-1 border border-gray-100 rounded-lg"
                    required
                >
                    <option value="" disabled selected>select categorie</option>
                        <template v-for="(categorie,index) in categories" :key="index">
                                <option selected :value="categorie.id">{{categorie.name}}</option> 
                        </template>
                </select>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <select
                @change="changeBorder(type , 'type')"
                    v-model="type"
                    id="type"
                    class="border remark-cities py-2.5 focus:border-transparent text-xs focus:ring-0 bg-gray-50 w-full p-1 border border-gray-100 rounded-lg"
                    required
                >
                    <option value="" disabled selected>select type</option>
                        <template v-for="(type,index) in types" :key="index">
                                <option :value="type.id">{{type.name}}</option>                       
                        </template>
                </select>
            </div>
      </div>

            <div class="grid grid-cols-2 gap-14 px-8">
            <div class="relative z-0 mb-6 w-full group">
                <select
                @change="changeBorder(mode , 'mode')"
                    v-model="mode"
                    id="mode"
                    class="border remark-cities py-2.5 focus:border-transparent text-xs focus:ring-0 bg-gray-50 w-full p-1 border border-gray-100 rounded-lg"
                    required
                >
                    <option value="" disabled selected>select mode</option>
                        <template v-for="(mode,index) in modes" :key="index">
                                <option selected :value="mode.id">{{mode.name}}</option> 
                        </template>
                </select>
            </div>
      </div>

    <div class="grid grid-cols-1 gap-3 md:gap-14 px-8 mt-2">
          <div class="relative z-0 my-6 w-full group">
            <input
            @change="changeBorder(image , 'image') ; changeImage()"
              type="file"
              name="image"
              id="image"
              class="remark-cities block mb-3 py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=""
              required
              multiple
            />
            <label
              for="floating_first_name"
              class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >Image</label>
        </div>
    </div>

       <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-14 px-8 mt-2">
          <div class="relative z-0 my-6 w-full group">
                <select
                @change="changeBorder(color , 'color')"
                    v-model="color"
                    id="categorie"
                    class="border remark-cities py-2.5 focus:border-transparent text-xs focus:ring-0 bg-gray-50 w-full p-1 border border-gray-100 rounded-lg"
                    required
                >
                    <option value="" disabled selected>select color</option>
                        <template v-for="(color,index) in colors" :key="index">
                                <option selected :value="color.id">{{color.name}}</option> 
                        </template>
                </select>
        </div>
        <div class="relative z-0 mb-6 md:my-6 w-full group">
          <input
          @keyup="changeBorder(background , 'background')"
          v-model="background"
            type="color"
            name="background"
            id="background"
            class="remark-cities block mb-3 py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            required
          />
          <label
            for="floating_last_name"
            class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Background</label
          >
        </div>
      </div>

      <div class="grid grid-cols-1 gap-3 md:gap-14 px-8 mt-2">
          <div class="relative z-0 my-6 w-full group">
            <textarea
            @keyup="changeBorder(description , 'description')"
            v-model="description"
              name="name"
              id="description"
              class="remark-cities block mb-3 py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=""
              required
            ></textarea>
            <label
              for="description"
              class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >Description</label>
        </div>
      </div>


      <div class="grid grid-cols-1 gap-14 p-3">
        <div class="relative z-0 mb-6 w-full group">
          <button @click="ajouterProduit()" class="remark-cities hover:text-gray-900 w-full p-3 rounded-lg text-gray-600 bg-white border border-orange-300 hover:font-bold mt-4">
            Update
          </button>
        </div>
      </div>
    </div>
  </div><br>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      name : '',
      price : '',
      image : '',
      color : '',
      background : '',
      description : '',
      categorie : '',
      type : '',
      mode : '',
      categories : [],
      types : [],
      colors : [],
      modes : [],
    };
  },
  created() {
    this.getCategoriesAndTypes();
  },
  methods: {
      changeBorder(value , id){
            const input = document.getElementById(id)
            if(value!=''){
                  input.style.borderBottom = '1px solid green'
            }else{
                input.style.borderBottom = '1px solid red'
            }
            if(value=='categorie'){
                this.categorie = value
            }
            else if(value=='type'){
                this.type=value
            }
            else if(value=='color'){
                this.color=value
            }
            else if(value=='mode'){
                this.mode=value
            }
    },
    changeImage(){
            let img = document.getElementById('image').value
            let   name = img.split("\\")
            this.image = name[2]
    },
    logout(){
      this.$store.commit('logout')
    },
    async ajouterProduit(){

        console.log('---------- prdocts info ------------')
        console.log(this.name)
        console.log(this.price)
        console.log(this.color)
        console.log(this.background)
        console.log(this.description)
        console.log(this.categorie)
        console.log(this.type)
        console.log(this.image)

        if(this.name!='' && this.price!='' && this.color!='' && this.background!='' && this.description!='' && this.categorie!='' && this.type!='' && this.image!=''){
                let formdata = new FormData()
                    formdata.append('name' , this.name)
                    formdata.append('price' , this.price)
                    formdata.append('color' , this.color)
                    formdata.append('background' , this.background)
                    formdata.append('description' , this.description)
                    formdata.append('categorie' , this.categorie)
                    formdata.append('type' , this.type)
                    formdata.append('image' , this.image)
                    formdata.append('color' , this.color)
                    formdata.append('mode' , this.color)
                const response = await  axios.post('http://localhost/hadiyati/add-produit' , formdata)
                const data = await JSON.parse(JSON.stringify(response.data))
                console.log(data)
                if(data.message!='updated'){
                        this.$swal({
                            icon: 'error',
                            title: 'Invalid...',
                            text: 'Votre produit pas sauvegarder !',
                        })
                }else{
                     this.$swal({
                        icon: 'success',
                        title: 'Votre produit été bien sauvegarder',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
        }else{
            this.$swal({
                icon: 'error',
                title: 'Invalid...',
                text: 'Tout information sont obliger !',
            })
        }

    },
    getCategoriesAndTypes() {
            axios
                .get(
                "http://localhost/hadiyati/categories-types")
                .then((response) => {
                this.categories = response.data.categories
                this.types = response.data.types
                this.colors = response.data.colors
                this.modes = response.data.modes
                })
                .catch((error) => {
                console.log(error);
                });

    },
  },
};
</script>

<style>
#attention {
  font-size: 10px !important;
}
</style>
