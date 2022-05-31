<template>
  <div>
    <nav
      class="bg-main-color border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800"
    >
      <div
        class="container flex flex-wrap justify-between items-center mx-auto"
      >
        <font-awesome-icon
          id="dropdownDefault"
          data-dropdown-toggle="dropdownCategories"
          class="cursor-pointer text-white"
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
            <!-- <template > -->

                <router-link
                to="/search"
                class="block py-2 px-4 hover:bg-gray-100 text-black"
                >
                  {{categorei.name}}
                  </router-link>
             
            <!-- </template> -->
            </li>
 
          </ul>
        </div>
        <a href="/" class="flex items-center">
          <img
            src="../../assets/images/logo.svg"
            class="mr-3 h-6 xl:ml-0 ml-6"
            style="transform: scale(2.3)"
            alt="Flowbite Logo"
          />
        </a>
        <div class="flex items-center md:order-2 sm:order-2">
          <button
            type="button"
            class="flex mr-3 text-sm bg-main-color rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 relative"
          >
            <span
              class="absolute right-0 bottom-5 bg-white border rounded-full flex item-center justify-center font-medium text-main-color px-1"
              >2</span
            >
            <a href="/panier"><img
              class="w-8 h-8 rounded-full bg-main-color border border-0 outline-none"
              src="../../assets/images/panier.svg"
              alt="user photo"
            /></a>
          </button>
          <button
            type="button"
            class="flex ml-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="menuProfile"
          >
            <span class="sr-only">Open user menu</span>
            <img
              class="w-8 h-8 rounded-full"
              src="../../assets/images/profile.png"
              alt="user photo"
            />
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
              <span class="block text-sm text-gray-900 dark:text-white"
                >Bonnie Green</span
              >
              <span
                class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400"
                >name@flowbite.com</span
              >
            </div>
            <ul class="py-1" aria-labelledby="menuProfile">
              <li>
                <router-link to="/profile/index" @click="toggleProfileMenu()"><a
                  href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >Profile</a
                ></router-link>
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  >Sign out</a
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
            class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
            <li>
              <router-link
                to="/connect"
                class="block py-2 pr-4 whitespace-nowrap pl-3 text-white hover:text-slate-200"
                >se connecter</router-link
              >
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
    }
  }
};
</script>

<style></style>
