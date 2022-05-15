<template>
    <div class="w-11/12 flex item-center justify-center rounded-lg mt-2 h-auto mx-auto">
    <!-- start menu of profile -->
            <div class="w-48 bg-white h-48 mr-8">
                <router-link to="/profile/index"><div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs">Votre compte Hadiyati</p>
               </div></router-link>
                <router-link to="/profile/commands"><div class="p-2 mt-2">
                   <p class="text-xs">Vos commandes</p>
               </div></router-link>
                <router-link to="/profile/Envies"><div class="p-2">
                   <p class="text-xs">Votre liste d'envies</p>
               </div></router-link>
                <router-link to="/profile/pass"><div class="border border-r-0 border-t-0 border-l-red-500 border-b-gray-300 p-2">
                   <p class="text-xs">Modifier votre mot de passe</p>
               </div></router-link>
                <div class="mt-2 p-2">
                   <p class="text-xs text-center text-red-500 cursor-pointer">déconnexion</p>
               </div>
            </div>
    <!-- end menu of profile -->
        <div class="w-4/5 bg-white">
                <div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs">Modifier votre mot de passe</p>
               </div>
                <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
                    <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                </div>
                <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
                    <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                </div>
                <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
                    <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                </div>
                <div class="w-60 ml-10 mt-8 relative z-0 mb-6 w-full group">
                    <button class="p-2 bg-red-400 rounded-lg text-white">enregistrer</button>
                </div>




        </div>
    </div>
</template>
<script>
export default {
    data(){

    }
}
</script>

<style>

#attention{
    font-size: 10px !important;
}


</style>