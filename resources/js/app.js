import './bootstrap';
import '../css/main.css';
import {createApp} from "vue";
import App from './components/App.vue'
import router from "./router/index.js";
import ToastPlugin from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-bootstrap.css';
import './script.js';
createApp(App).use(ToastPlugin).use(router).mount('#app')
