import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import '@/assets/css/index.css'
import 'flowbite';

import { library } from '@fortawesome/fontawesome-svg-core'
import { faBars , faHeart , faRightLong } from '@fortawesome/free-solid-svg-icons'
import { fa42Group , faGratipay} from '@fortawesome/free-brands-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

// /* add icons to the library */
library.add(faBars , fa42Group , faHeart , faRightLong , faGratipay)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).use(store).use(router).use(VueSweetalert2).mount('#app')
