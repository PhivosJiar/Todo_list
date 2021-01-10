require('./bootstrap');

import Vue from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare,faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'


import Router from 'vue-router'

Vue.use(Router)

import Test from './Todo'
import Todo from './vue/app.vue'
import Login from './Login/app.vue'
import Signup from './Login/signup.vue'
library.add(faPlusSquare,faTrash)

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
        }
    ],
});

const test = new Vue({
    el:'#app',
    components: { Login },
    router
});

