<template>
  <div
    class="w-11/12 flex md:flex-row flex-col item-center justify-center rounded-lg mt-2 h-auto mx-auto"
  >
    <!-- start menu of profile -->
    <div class="w-full md:w-48 bg-white h-36 mr-8 rounded-lg mb-4 md:mb-0">
      <router-link to="/"
        ><div
          class="border border-l-red-500 border-r-0 border-t-0 border-b-gray-300 p-2"
        >
          <p class="text-xs remark-cities">Votre compte Hadiyati</p>
        </div></router-link
      >
      <router-link to="/ajouter-produit"
        ><div class="p-2 mt-2">
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
            @keyup="changeBorder(firstname , 'firstname')"
            v-model="firstname"
              type="text"
              name="firstname"
              id="firstname"
              class="remark-cities block mb-3 py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=" "
              required
            />
            <label
              for="floating_first_name"
              class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >Prenom</label
            >
        </div>
        <div class="relative z-0 mb-6 md:my-6 w-full group">
          <input
          @keyup="changeBorder(lastname , 'lastname')"
          v-model="lastname"
            type="text"
            name="lastname"
            id="lastname"
            class="remark-cities block mb-3 py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            required
          />
          <label
            for="floating_last_name"
            class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Nom</label
          >
        </div>
      </div>
      <div class="grid grid-cols-2 gap-14 px-8">
        <div class="relative z-0 mb-6 w-full group">
          <input
          @keyup="changeBorder(email , 'email')"
          v-model="email"
            type="email"
            name="email"
            id="email"
            class="remark-cities block py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            required
          />
          <label
            for="floating_first_name"
            class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Email</label
          >
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input
           @keyup="changeBorder(tel , 'tel')"
          v-model="tel"
            type="text"
            name="tel"
            id="tel"
            class="remark-cities block py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            required
          />
          <label
            for="floating_last_name"
            class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Téléphone</label
          >
        </div>
      </div>
      <div class="grid grid-cols-1 gap-14 px-8 mt-6">
        <div class="relative z-0 mb-6 w-full group">
          <input
          @keyup="changeBorder(birthday , 'birthday')"
          v-model="birthday"
            type="date"
            name="birthday"
            id="birthday"
            class="remark-cities block py-1 px-0 w-full text-xs text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            required
          />
          <label
            for="floating_last_name"
            class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Date de naissance</label
          >
        </div>
      </div>

      <div class="grid grid-cols-1 gap-14 p-3">
        <div class="relative z-0 mb-6 w-full group">
          <button @click="updateUser()" class="remark-cities hover:text-gray-900 w-full p-3 rounded-lg text-gray-600 bg-white border border-orange-300 hover:font-bold mt-4">
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
      firstname : '',
      lastname : '',
      email : '',
      ville : '',
      adress : '',
      birthday : '',
      tel : '',
      cities : [],
    };
  },
  created() {
    this.getInfo();
  },
  methods: {
      changeBorder(value , id){
            const input = document.getElementById(id)
            if(value!='' && id=='ville'){
                  input.style.border = '1px solid green'
            }else if(value!='' && id!='ville'){
                input.style.borderBottom = '2px solid green'
            }else if(value=='' && id!='ville' && id!='adress'){
                input.style.borderBottom = '2px solid red'
            }else if(value=='' && id=='adress' || id=='ville'){
                  input.style.borderBottom = '2px solid gray'
            }
    },
    logout(){
      this.$store.commit('logout')
    },
    async updateUser(){

        if(this.firstname!='' && this.lastname!='' && this.email!='' && this.birthday!='' && this.tel!=''){
                let formdata = new FormData()
                    formdata.append('firstname' , this.firstname)
                    formdata.append('lastname' , this.lastname)
                    formdata.append('email' , this.email)
                    formdata.append('birthday' , this.birthday)
                    formdata.append('tel' , this.tel)
                    formdata.append('adress' , this.adress)
                    formdata.append('ville' , this.ville)
                const response = await  axios.post('http://localhost/hadiyati/update-user/'+this.$store.state.id_user_login , formdata)
                const data = await JSON.parse(JSON.stringify(response.data))
                if(data.message!='updated'){
                        this.$swal({
                            icon: 'error',
                            title: 'Invalid...',
                            text: 'Votre information pas sauvegarder !',
                        })
                }else{
                     this.$swal({
                        icon: 'success',
                        title: 'Votre information été bien sauvegarder',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
        }else{
            this.errorMessage = 'invalid'
        }

    },
    getInfo() {
            axios
                .get(
                "http://localhost/hadiyati/info-users/" +
                    this.$store.state.id_user_login
                )
                .then((response) => {
                this.user = response.data;
                this.firstname = this.user[0].firstname
                this.lastname = this.user[0].lastname
                this.email = this.user[0].email
                this.ville = this.user[0].ville
                this.adress = this.user[0].adress
                this.birthday = this.user[0].birthday
                this.tel = this.user[0].tel
                })
                .catch((error) => {
                console.log(error);
                });

                axios.post('https://countriesnow.space/api/v0.1/countries/cities' , 
                    {
                        country: "Morocco"
                    }
                ).then((response) => {
                        this.cities = response.data.data
                }).catch((error) => {
                        console.log(error);
                })

    },
  },
};
</script>

<style>
#attention {
  font-size: 10px !important;
}
</style>
