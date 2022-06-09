<template>
  <div
    class="w-11/12 flex md:flex-row flex-col item-center justify-center rounded-lg mt-2 h-auto mx-auto"
  >
    <!-- start menu of profile -->
    <div class="w-full md:w-48 bg-white h-36 mr-8 rounded-lg mb-4 md:mb-0">
      <router-link to="/"
        ><div
          class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2"
        >
          <p class="text-xs remark-cities">Votre compte Hadiyati</p>
        </div></router-link
      >
      <router-link to="/ajouter-produit"
        ><div class="p-2 mt-2">
          <p class="text-xs remark-cities">Ajouter Produit</p>
        </div></router-link
      >
      <!-- <router-link to="/profile/Envies"><div class="p-2">
                   <p class="text-xs">Votre liste d'envies</p>
               </div></router-link> -->
      <router-link to="/admin-pass"
        ><div
          class="border border-r-0 border-t-0 border-l-red-500 border-b-gray-300 p-2"
        >
          <p class="text-xs remark-cities">Modifier votre mot de passe</p>
        </div></router-link
      >
      <div class="mt-1 p-2">
        <p class="text-xs text-center text-red-500 cursor-pointer remark-cities">
          déconnexion
        </p>
      </div>
    </div>
    <!-- end menu of profile -->
    <div class="w-full md:w-4/5 mx-auto md:mx-0 bg-white rounded-lg">
      <div
        class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2"
      >
        <p class="text-xs remark-cities">Modifier votre mot de passe</p>
      </div>
      <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
        <input
         @keyup="changeBorder(old_password , 'old_password')"
        v-model="old_password"
          type="text"
          name="old_password"
          id="old_password"
          class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" "
          required
        />
        <label
          for="floating_first_name"
          class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >old_password</label
        >
      </div>
      <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
        <input
        @keyup="changeBorder(new_password , 'new_password')"
        v-model="new_password"
          type="text"
          name="new_password"
          id="new_password"
          class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" "
          required
        />
        <label
          for="floating_first_name"
          class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >new password</label
        >
      </div>
      <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
        <input
         @keyup="changeBorder(confirm_password , 'confirm_password')"
        v-model="confirm_password"
          type="text"
          name="confirm_password"
          id="confirm_password"
          class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" "
          required
        />
        <label
          for="floating_first_name"
          class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >confirme password</label
        >
      </div>
      <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
        <button @click="updatePassword()" class="remark-cities p-2 bg-white rounded-lg text-gray-600 hover:font-bold hover:text-gray-900 border border-orange-300">
          enregistrer
        </button>
        <p>{{errorMessage}}</p>
      </div>
    </div>
  </div><br>
</template>
<script>
import axios from "axios";
export default {
  data(){
      return{
          validate : false,
          old_password : '',
          new_password : '',
          confirm_password : '',
      }
  },
  methods : {
      changeBorder(value , id){
            const input = document.getElementById(id)
            if(value==''){
                input.style.borderBottom = '2px solid red'
            }else{
                input.style.borderBottom = '2px solid green'
            }
    },
    async updatePassword(){

          let formdataPwd = new FormData()
          formdataPwd.append('new_password' , this.old_password)
          const responsePwd = await  axios.post('http://localhost/hadiyati/get-password/'+this.$store.state.id_user_login , formdataPwd)
          const data = await JSON.parse(JSON.stringify(responsePwd.data))
          this.validate = data.validate
          if (!this.validate) {
              this.$swal({
                icon: 'error',
                title: 'Invalid...',
                text: 'Votre mot de passe invalid !',
            })
            return 0
          }
      

        if(this.old_password!='' && this.new_password!='' && this.confirm_password!='' && this.new_password==this.confirm_password && this.validate==true){
                let formdata = new FormData()
                    formdata.append('new_password' , this.new_password)
                const response = await  axios.post('http://localhost/hadiyati/update-password/'+this.$store.state.id_user_login , formdata)
                const data = await JSON.parse(JSON.stringify(response.data))
                this.errorMessage = 'upated password'
                console.log(data)
                this.old_password = ''
                this.new_password = ''
                this.confirm_password = ''
                    this.$swal({
                        icon: 'success',
                        title: 'Votre mote de pass été bien enregister',
                        showConfirmButton: false,
                        timer: 3000
                    })
        }else if(this.new_password!='' && this.confirm_password!='' && this.new_password!=this.confirm_password){
            this.$swal({
                icon: 'error',
                title: 'Invalid...',
                text: 'Confirmer votre mot de pass !',
            })
          }else{
            this.$swal({
                icon: 'error',
                title: 'Invalid...',
                text: 'Tout information sont obligé !',
            })
        }
    },
  }


};
</script>

<style>
#attention {
  font-size: 10px !important;
}
</style>
