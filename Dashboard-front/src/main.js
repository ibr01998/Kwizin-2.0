import { createApp } from 'vue'
import App from './App.vue'
import './index.css'
import router from './router/index'
import axios from 'axios';

createApp(App).use(router).mount('#app')

axios.defaults.withCredentials = true;
