<template>
  <div>
    <nav
      class="relative bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800 z-50"
    >
      <div
        class="container flex flex-wrap justify-between items-center mx-auto"
      >
        <font-awesome-icon
          id="dropdownDefault"
          data-dropdown-toggle="dropdownCategories"
          class="cursor-pointer text-white hidden"
          icon="bars"
        />

        <div
          id="dropdownCategories"
          class="hidden z-50 w-44 h-80 overflow-y-scroll bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
        >
          <ul
            v-for="categorei in categoreis" :key="categorei.id"
            class="py-1 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="dropdownDefault"
          >
            <li v-if="categorei.name!='all'" @click="categorie=categorei.id">
                <router-link
                to="/search"
                class="block py-2 px-4 hover:bg-gray-100 text-black"
                >
                  {{categorei.name}}
                  </router-link>
            </li>
 
          </ul>
        </div>
        
        <router-link to="/">
              <img
                src="../../assets/images/logo.svg"
                class="mr-3 h-6 xl:ml-0 ml-6"
                style="transform: scale(2.3)"
                alt="Flowbite Logo"
              /> 
              <!-- <img
                :src="require('http://localhost/hadiyati/public/images/'+imgSrc)"
                class="mr-3 h-6 xl:ml-0 ml-6"
                style="transform: scale(2.3)"
                alt="Flowbite Logo"
              /> -->
           
          </router-link>
        <div class="flex items-center md:order-2 sm:order-2">
              <div class="totalPro mr-4">
                  <span>{{$store.state.totalLength}}</span>
                  <span>{{$store.state.totalLength}}</span>
              </div>
                <router-link to="/panier">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                </router-link>
          <button
            v-if="$store.state.id_user_login!=0"
            type="button"
            class="flex ml-4 text-sm rounded-full md:mr-0"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="menuProfile"
          >
            <span class="sr-only">Open user menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
            </svg>
          </button>

          <div
            class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
            id="menuProfile"
            style="
              position: absolute;
              inset: auto auto 0px 0px;
              margin: 0px;
              transform: translate(956px, 1081px);
            "
            data-popper-reference-hidden
            data-popper-escaped
            data-popper-placement="top"
          >
            <div class="py-3 px-4">
              <span
                class="remark-cities block text-sm font-medium text-gray-500 truncate dark:text-gray-400"
                >{{$store.state.email_user_login}}</span
              >
            </div>
            <ul class="py-1" aria-labelledby="menuProfile">
              <li>
                <router-link to="/profile/index" @click="toggleProfileMenu()"><a
                  href="#"
                  class="remark-cities flex py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                  </svg>
                  Profile
                  </a
                ></router-link>
              </li>
              <li @click="logout()">
                <a
                  href="#"
                  class="remark-cities flex py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
                  Sign out
                  </a
                >
              </li>
            </ul>
          </div>
          <button
            data-collapse-toggle="mobile-menu-2"
            type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"
              />
            </svg>
            <svg
              class="hidden w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
        </div>

        <!-- -------------- start search ------------------------- -->

        <div
          class="md:w-1/3 sm:mt-0 mt-2 sm:w-1/3 w-screen relative mr-3 md:order-1 md:mr-24 md:block"
        >
          <div
            class="flex absolute inset-y-0 right-0 items-center pr-3 cursor-pointer"
          >
           
              <router-link
                to="/search"
              >
                <svg
                class="w-5 h-5 text-main-color"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  clip-rule="evenodd"
                />
              </svg>
            </router-link>
            
          </div>
          <input
            v-model="nameProduct"
            type="text"
            id="search"
            class="remark-cities block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-red-300 focus:border-red-300"
            placeholder="Search..."
          />
        </div>

        <!-- -------------- end search ------------------------- -->
        <div
          class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1 order-3"
          id="mobile-menu-2"
        >
          <ul
            class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium"
          >
            <li v-if="$store.state.id_user_login==0">
              <router-link
                to="/connect"
                class="remark-cities block py-2 pr-4 whitespace-nowrap pl-3 text-gray-700 hover:text-slate-200"
                >se connecter</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <router-view :categorie="categorie" :nameProduct="nameProduct"></router-view>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: "navbarComponent",
  data(){
    return{
      categoreis : [],
      categorie : '',
      nameProduct : '',
      imgSrc : 'test.jpg',
    }
  },
  components: {},
  created(){
      this.getCategoreis()
  },
  methods : {
    toggleProfileMenu(){
      const men = document.getElementById('menuProfile');
      men.classList.toggle('hidden');
    },
   async getCategoreis(){
      try {
        const response = await axios.get("http://localhost/hadiyati/categories");
        const data = await JSON.parse(JSON.stringify(response.data));
        if (data) {
          this.categoreis = data;
          console.log(data)
          console.log(this.categoreis)
        }
      } catch (error) {
        console.log(error);
      }
    },
    logout(){
      this.$store.commit('logout')
    }





  }
};
</script>

<style>


/* From uiverse.io by @mrhyddenn */
.totalPro {
  position: relative;
}

.totalPro span {
  position: absolute;
  color: #fff;
  transform: translate(-50%, -50%);
  font-size: 22px;
  letter-spacing: 5px;
}

.totalPro span:nth-child(1) {
  color: transparent;
  -webkit-text-stroke: 0.3px #EB5353;
}

.totalPro span:nth-child(2) {
  color: #EB5353;
  -webkit-text-stroke: 1px #EB5353;
  animation: uiverse723 3s ease-in-out infinite;
}

@keyframes uiverse723 {
  0%, 100% {
    clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 
     54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
  }

  50% {
    clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 
     51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
  }
}


</style>
