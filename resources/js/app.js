require('./bootstrap');

import Vue from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPencilAlt, faPlusSquare,faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'


import Router from 'vue-router'

Vue.use(Router)

import Test from './Todo'
import Todo from './vue/app.vue'
import Login from './Login/app.vue'
import Signup from './Login/signup.vue'
import Completed from './vue/findCompleted'
import InCompleted from './vue/inCompleted.vue'
library.add(faPlusSquare,faTrash,faPencilAlt)

Vue.component('font-awesome-icon', FontAwesomeIcon)
// import VueRouter from 'vue-router';
// Vue.use(Router)


const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Login',
            component: Login 
        },
        {
            path: '/Todo',
            name: 'Todo',
            component: Todo 
        },
        {
            path:'/Signup',
            name:'Signup',
            component: Signup
        },
        {
            path:'/Completed',
            name:'Completed',
            component: Completed
        },
        {
            path:'/InCompleted',
            name:'InCompleted',
            component: InCompleted
        }
    ],
});

const test = new Vue({
    el:'#app',
    components: { Login },
    router
});

