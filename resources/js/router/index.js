import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history:createWebHistory(),
    routes:[
        // {
        //     path:'/add-student',
        //     component:()=>import('../components/AddStudent.vue')
        // },
        // {
        //     path:'/',
        //     component:()=>import('../components/StudentList.vue')
        // },
        // {
        //     path:'/',
        //     component:()=>import('../components/StudentList.vue')
        // }
    ]
})

export default router;
