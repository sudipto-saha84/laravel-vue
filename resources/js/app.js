import './bootstrap';
import '../css/main.css';
import {createApp} from "vue";
import App from './components/App.vue'
import router from "./router/index.js";
import './script.js';
createApp(App).use(router).mount('#app')
