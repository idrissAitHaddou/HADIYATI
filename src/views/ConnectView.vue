<template>
   <div class="flex item-center justify-between p-6">
        <div class="w-1/2 p-6  flex flex-col item-center justify-between border border-t-0 border-l-0 border-b-0">
            <h3 class="text-center mb-8 title-cities">Se connecter</h3>
            <form @submit.prevent="login()" action="" class="w-full">
                <div class="relative z-0 mb-6 w-full group">
                    <input @keyup="changeBorder(email , 'email')" id="email" v-model="email" type="email" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer remark-cities" placeholder=" " required />
                    <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 remark-cities">Email address</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input @keyup="changeBorder(password , 'password')" v-model="password" type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer remark-cities" placeholder=" " required />
                    <label for="password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 remark-cities">Password</label>
                </div>
                <button type="submit" class="border-orange-300 bg-white text-gray-600 border hover:text-gray-900 hover:font-bold p-3 rounded-lg w-full focus:outline-none remark-cities">SE CONNECTER</button>
                <p>{{errorMessage}}</p>
            </form>
        </div>
        <div class="w-1/2 p-6 flex flex-col item-center justify-between">
              <h3 class="text-center title-cities">créer votre compte</h3>
              <p class="mb-14 text-sm text-gray-600 remark-cities">
                  Créez votre compte client Hadiyati en quelques  clics ! Vous
                  pouvez vous inscrire en utilisant votre adresse e-mail
              </p>
              <router-link to="/register">
                  <button class="bg-white text-gray-600 border border-orange-300 hover:text-gray-900 hover:font-bold p-3 rounded-lg w-full focus:outline-none remark-cities">CRÉER VOTRE COMPTE</button>
              </router-link>
        </div>
   </div>
</template>


<script>
import axios from 'axios'
export default {
    data(){
        return{
            email : '',
            password : '',
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
     async login(){
            if(this.email!='' && this.password!=''){
                let formdata = new FormData()
                            formdata.append('email' , this.email)
                            formdata.append('password' , this.password)
                const response = await  axios.post('http://localhost/hadiyati/login' , formdata)
                const data = await JSON.parse(JSON.stringify(response.data))
                if(data.message=='is login'){
                    localStorage.setItem('id_user_login' , data.id)
                    localStorage.setItem('email_user_login' , data.email)
                    localStorage.setItem('token' , data.jwt)
                    window.location.href = 'http://localhost:8080'
                }else{
                    this.$swal({
                        icon: 'error',
                        title: 'Invalid...',
                        text: 'votre mote de pass ou email invalid!',
                    })
                }
            }
        }
    }
}
</script>