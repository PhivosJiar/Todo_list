<template> 
<div class="temp">
  
  <leftdiv></leftdiv>
  <span class="top">．</span>
  <div class="rightview">
    <div class="loginbg"> 
        <singup-2></singup-2>
    </div>
  </div>
  
</div>
</template>
<script>
import Leftdiv from './leftdiv.vue'
import singup2 from './singup2.vue'

export default {
  components: { singup2, Leftdiv },
  
}
</script>

<style scoped>
.loginbg{
  background:#ffffff;
  height:100%;
  padding-top: 8%;
  width:80%;
  margin:10% auto auto auto;
  padding:1% 20% 2% 20%;
}
.rightview{
  width:85%;
  margin-left:15%;
  margin-top:0;
  height:60%;
  background:#f8fafc;
    }
.temp{
    height:100%;
}
.top{
    color:#f8fafc;
}
</style>