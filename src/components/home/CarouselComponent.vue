<template>
  <div id="animation-carousel" 
  class="relative overflow-hidden bg-[#F9E3E3]" 
  data-carousel="static"
  >
  
    <div
      class="relative h-48 sm:h-64 xl:h-80 2xl:h-96"
    >

      <div
        class="duration-500 ease-linear absolute inset-0 transition-all transform translate-x-0 z-20"
        data-carousel-item="active"
      >
       
        <img
          src="../../assets/images/sliderFriends.svg"
          class="block absolute"
          alt="..."
        />
      </div>

      <div
        class="duration-500 ease-linear absolute inset-0 transition-all transform translate-x-full z-10"
        data-carousel-item=""
      >
        <img
          src="../../assets/images/sliderBirthday.svg"
          class="block absolute"
          alt="..."
        />
      </div>

      <div
        class="hidden duration-500 ease-linear absolute inset-0 transition-all transform"
        data-carousel-item=""
      >
        <img
          src="../../assets/images/sliderLove.svg"
          class="block absolute"
          alt="..."
        />
      </div>
    </div>

    <button
      type="button"
      class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
      data-carousel-prev=""
    >
      <span
        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
      >
        <svg
          class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 19l-7-7 7-7"
          ></path>
        </svg>
        <span class="hidden">Previous</span>
      </span>
    </button>
    <button
      type="button"
      class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
      data-carousel-next=""
    >
      <span
        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
      >
        <svg
          class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 5l7 7-7 7"
          ></path>
        </svg>
        <span class="hidden">Next</span>
      </span>
    </button>
  </div>
</template>

<script>
export default {
  name: "carouselComponent",
  components: {},
};
</script>

<style>

@media screen and (min-width : 850px) {
  #animation-carousel{
    height: 400px !important;
}
}
#animation-carousel{
    height: auto;
}

</style>
