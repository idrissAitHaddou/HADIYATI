<template>

    <div class="w-9/12 mx-auto">

        <h3 class="text-left pl-5 mt-6 title-cities">Créer un compte</h3>
        <div class="flex item-center justify-between">
                <div class="w-1/2 p-6  flex flex-col item-center justify-between">
                    <div class="w-full">
                        <div class="relative z-0 mb-6 w-full group">
                            <input @keyup="changeBorder(firstname , 'firstname')" id="firstname" v-model="firstname" type="text" name="firstname" class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="firstname" class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prenom</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input @keyup="changeBorder(email , 'email')" v-model="email" type="email" name="email" id="email" class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="email" class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Adresse e-mail</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input @keyup="changeBorder(tel , 'tel')" v-model="tel" type="text" name="tel" id="tel" class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="tel" class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Téléphone mobile (optionnel)</label>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 p-6  flex flex-col item-center justify-between">
                    <div class="w-full">
                        <div class="relative z-0 mb-6 w-full group">
                            <input @keyup="changeBorder(lastname , 'lastname')" id="lastname" v-model="lastname" type="text" name="lastname" class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="lastname" class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input @keyup="changeBorder(password , 'password')" v-model="password" type="password" name="password" id="password" class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="password" class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mote de pass</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input @change="changeBorder(birthday , 'birthday')" v-model="birthday" type="date" name="birthday" id="birthday" class="remark-cities block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="birthday" class="remark-cities absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Dtae de naissance</label>
                        </div>
                    </div>
                </div>
        </div>
        <button @click="register" class="remark-cities border-orange-300 bg-white text-gray-600 border hover:text-gray-900 hover:font-bold  p-3 rounded-lg w-full focus:outline-none">CRÉER VOTRE COMPTE</button> {{errorMessage}}

    </div>

</template>


<script>
import axios from 'axios'
export default {
    data(){
        return{
            firstname : '',
            lastname : '',
            email : '',
            password : '',
            tel : '',
            birthday : '',
            errorMessage : '',
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
       async register(){
            if(this.firstname!='' && this.lastname!='' && this.email!='' && this.password!='' && this.tel!='' && this.birthday!=''){
                let formdata = new FormData()
                            formdata.append('firstname' , this.firstname)
                            formdata.append('lastname' , this.lastname)
                            formdata.append('email' , this.email)
                            formdata.append('password' , this.password)
                            formdata.append('tel' , this.tel)
                            formdata.append('birthday' , this.birthday)
                const response = await  axios.post('http://localhost/hadiyati/register' , formdata)
                const data = await JSON.parse(JSON.stringify(response.data))
                if(data.status=='inserted'){
                    this.firstname='' 
                    this.lastname='' 
                    this.email='' 
                    this.password='' 
                    this.tel='' 
                    this.birthday=''
                    localStorage.setItem('id_user_login' , data.id)
                    localStorage.setItem('email_user_login' , data.email)
                    localStorage.setItem('token' , data.jwt)
                    this.$swal({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    window.location.href = 'http://localhost:8080'
                }else if(data.status=='email invalid'){
                    this.$swal({
                        icon: 'error',
                        title: 'Invalid...',
                        text: 'Email exist déja !',
                    })
                }
                console.log(data)
            }else{
                    this.$swal({
                        icon: 'error',
                        title: 'Invalid...',
                        text: 'Tout information sont obligé !',
                    })
            }
        }
    }
}
</script>