<template> 

<div class="loginbg"> 

  <login></login>
 
</div>
</template>

<script>
import Login from './login'
import Signup from './signup'

export default {
    components:{
    Login,
    Signup
    }

}
</script>

<style scoped>
.loginbg{
  background:#ffffff;
  height:100%;
  padding-top: 8%;
}
</style>
