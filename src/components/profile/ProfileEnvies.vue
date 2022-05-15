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
                <router-link to="/profile/Envies"><div class="p-2 border border-r-0 border-t-0 border-b-0 border-l-red-500">
                   <p class="text-xs">Votre liste d'envies</p>
               </div></router-link>
                <router-link to="/profile/pass"><div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs">Modifier votre mot de passe</p>
               </div></router-link>
                <div class="mt-2 p-2">
                   <p class="text-xs text-center text-red-500 cursor-pointer">déconnexion</p>
               </div>
            </div>
    <!-- end menu of profile -->
        <div class="w-4/5 bg-white pb-4">
                <div class="border border-l-0 border-r-0 border-t-0 border-b-gray-300 p-2">
                   <p class="text-xs">Votre liste d'envies</p>
               </div>
                <div class="flex item-center justify-between px-8 pt-2 mt-3">
                    <a href="#" class="flex w-148 relative h-28 border items-center bg-white rounded-lg">
                            <img class="object-cover h-full w-28 rounded-lg border border-gray-300" src="../../assets/images/products/23T115647.206.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 w-36 text-xs tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p>
                                    <span class="mb-3 text-xs text-black">99.00 Dhs</span>
                                </p>
                                <p>
                                    <span class="mb-3 text-xs text-black">quantité : 12</span>
                                </p>
                            </div>
                            <img class="absolute -top-1 -right-1" src="../../assets/images/hearFull.svg" alt="">
                    </a>
                    <a href="#" class="flex w-148 relative h-28 border items-center bg-white rounded-lg">
                            <img class="object-cover h-full w-28 rounded-lg border border-gray-300" src="../../assets/images/products/23T115647.206.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 w-36 text-xs tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p>
                                    <span class="mb-3 text-xs text-black">99.00 Dhs</span>
                                </p>
                                <p>
                                    <span class="mb-3 text-xs text-black">quantité : 12</span>
                                </p>
                            </div>
                            <img class="absolute -top-1 -right-1" src="../../assets/images/hearFull.svg" alt="">
                    </a>

                </div>
                <div class="flex item-center justify-between px-8 pt-2 mt-3">
                    <a href="#" class="flex w-148 relative h-28 border items-center bg-white rounded-lg">
                            <img class="object-cover h-full w-28 rounded-lg border border-gray-300" src="../../assets/images/products/23T115647.206.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 w-36 text-xs tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p>
                                    <span class="mb-3 text-xs text-black">99.00 Dhs</span>
                                </p>
                                <p>
                                    <span class="mb-3 text-xs text-black">quantité : 12</span>
                                </p>
                            </div>
                            <img class="absolute -top-1 -right-1" src="../../assets/images/hearFull.svg" alt="">
                    </a>
                    <a href="#" class="flex w-148 relative h-28 border items-center bg-white rounded-lg">
                            <img class="object-cover h-full w-28 rounded-lg border border-gray-300" src="../../assets/images/products/23T115647.206.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 w-36 text-xs tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p>
                                    <span class="mb-3 text-xs text-black">99.00 Dhs</span>
                                </p>
                                <p>
                                    <span class="mb-3 text-xs text-black">quantité : 12</span>
                                </p>
                            </div>
                            <img class="absolute -top-1 -right-1" src="../../assets/images/hearFull.svg" alt="">
                    </a>

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