import {createRouter, createWebHistory} from 'vue-router'
import mainLayout from '../layouts/main.vue'

const router = createRouter({
    history:createWebHistory(),
    routes:[
        {
            path:'/',
            name:'home',
            component:()=>import('../components/Home.vue')
        },
        {
            path:'/auth-success',
            name:'authSuccess',
            component:()=>import('../components/HomeSuccess.vue'),
            // meta: { layout: mainLayout }
        },
        {
            path:'/menu',
            name:'menu',
            component:()=>import('../components/mainMenu.vue'),
            // meta: { layout: mainLayout }
        },

    ]
})

export default router;
