import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import SearchView from '../views/SearchView.vue'
import PanierView from '../views/PanierView.vue'
import ProductView from '../views/ProductView.vue'
import ConnectView from '../views/ConnectView.vue'
import RegisterView from '../views/RegisterView.vue'
import AdresseCommand from '../components/commands/AdresseCommand.vue'
import LivraisonCommand from '../components/commands/LivraisonCommand.vue'
import PaiementCommand from '../components/commands/PaiementCommand.vue'
import ValideCommand from '../components/commands/ValideCommand.vue'
import ProfileView from '../views/ProfileView.vue'
import ProfileCommandes from '../components/profile/ProfileCommandes.vue'
import ProfileEnvies from '../components/profile/ProfileEnvies.vue'
import UpdatePassword from '../components/profile/UpdatePassword.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/search',
    name: 'searchView',
    component: SearchView
  },
  {
    path: '/panier',
    name: 'panierView',
    component: PanierView
  },
  {
    path: '/cart/:id',
    name: 'productView',
    component: ProductView
  },
  {
    path: '/connect',
    name: 'connectView',
    component: ConnectView
  },
  {
    path: '/register',
    name: 'registerView',
    component: RegisterView
  },
  {
    path: '/command-adress',
    name: 'adresseCommand',
    component: AdresseCommand
  },
  {
    path: '/command-livraison',
    name: 'livraisonCommand',
    component: LivraisonCommand
  },
  {
    path: '/command-payment',
    name: 'paiementCommand',
    component: PaiementCommand
  },
  {
    path: '/command-valid',
    name: 'valideCommand',
    component: ValideCommand
  },
  {
    path: '/profile/index',
    name: 'profileView',
    component: ProfileView
  },
  {
    path: '/profile/commands',
    name: 'profileCommandes',
    component: ProfileCommandes
  },
  {
    path: '/profile/Envies',
    name: 'profileEnvies',
    component: ProfileEnvies
  },
  {
    path: '/profile/pass',
    name: 'updatePassword',
    component: UpdatePassword
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
