<template>
  <div class="bg-body-color">
    <CarouselComponent/>
    <MainCategoryComponent/>
    <BestCategoriesComponent/>
    <SliderPlusVendus/>
    <MeilleurSousMadComponent/>
    <SendWorldwideComponent/>
    <RecentlyViewedProductsComponent/>
  </div>
</template>

<script>
import CarouselComponent from '../components/home/CarouselComponent.vue'
import MainCategoryComponent from '../components/home/MainCategoryComponent.vue'
import BestCategoriesComponent from '../components/home/BestCategoriesComponent.vue'
import SliderPlusVendus from '../components/home/SliderPlusVendus.vue'
import MeilleurSousMadComponent from '../components/home/MeilleurSousMadComponent.vue'
import SendWorldwideComponent from '../components/home/SendWorldwideComponent.vue'
import RecentlyViewedProductsComponent from '../components/home/RecentlyViewedProductsComponent.vue'


export default {
  name: 'HomeView',
  components: {
    CarouselComponent,
    MainCategoryComponent,
    BestCategoriesComponent,
    SliderPlusVendus,
    MeilleurSousMadComponent,
    SendWorldwideComponent,
    RecentlyViewedProductsComponent
  }
}
</script>
