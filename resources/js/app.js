require('./bootstrap');

import Vue from 'vue'
import App from './vue/app'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare,faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import Login from './Login/app'

library.add(faPlusSquare,faTrash)

Vue.component('font-awesome-icon', FontAwesomeIcon)

const app = new Vue({
    el:'#app',
    components: { App }
});

const login = new Vue({
    el:'#login',
    components: { Login }
});