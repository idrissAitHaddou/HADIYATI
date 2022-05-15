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

// /* add icons to the library */
library.add(faBars , fa42Group , faHeart , faRightLong , faGratipay)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).use(store).use(router).mount('#app')
