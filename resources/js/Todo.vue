<template>
    <div>
        <nav-bar></nav-bar>
          <p>
            <router-link :to="{ name: 'Login' }">Login</router-link> |
            <router-link :to="{ name: 'Todo' }">Todo World</router-link>
        </p>
        <todo></todo>
        <login></login>
        <!-- <router-view></router-view> -->
    </div>
</template>

<script>
import Todo from './vue/app.vue'
import Login from './Login/app.vue'

export default {
    components:{
        Todo,
        Login
    }
}
</script>
