<template>
      <div class="leftnav"> 
    <div class="leftmask">
      <div class="menucontainer">
        <nav class="menu">
           
            <div class="menu-logo"><a>To Do</a></div>
            <ul  class="menu-box">
                <!-- <router-link to="/Todo"  class="router">  -->
                <li class="current-active" @click="GoToTodo()">
                <img src="https://i.ibb.co/Vw18hz9/note.png" alt="note" border="0" width="20px"  style="margin:auto 10px;">
                <!-- home </router-link> -->
                Home
                </li>

                <!-- <router-link to="/Completed"  class="router">  -->
                <li @click="GoToCompleted()">
                <img src="https://i.ibb.co/vhXfdYv/check-mark.png" alt="check-mark" border="0" width="20px" style="margin:auto 10px;">
                <!-- Completed</router-link> -->
                Completed
                </li>

                <!-- <router-link to="/InCompleted" class="router"> -->
                <li @click="GoToinCompleted()">
                <img src="https://i.ibb.co/9qDpJFM/passage-of-time.png" alt="passage-of-time" border="0" width="20px" style="margin:auto 10px;">
                <!-- InCompleted</router-link> -->
                InCompleted
                </li>

                <!-- <router-link to="/" class="router"> -->
                <li @click="BackHome()">
                <img src="https://i.ibb.co/jbwcdBy/arrow.png" alt="arrow" border="0" width="20px" style="margin:auto 10px;">
                <!-- LogOut</router-link> -->
                Logout
                </li>
            </ul>
        </nav>
      </div>
    </div>
  </div>
</template>
<script>

export default {
    methods:{
        GoToTodo(){
            this.$router.push('/Todo')     
        },
        GoToCompleted(){
            this.$router.push('/Completed')   
        },
        GoToinCompleted(){
            this.$router.push('/inCompleted')   
        },
        BackHome(){
            this.$router.push('/')   
        },
    }
}
</script>
<style scoped>

     /*the menu nav bar start ------->*/

     
    .leftnav{
      float:left;
      margin-top:0;
      width:15%;
      height:100%;
      background-image: url("https://img.onl/eptmZi");
      background-repeat: no-repeat;
      background-size: cover;
    }
    .leftmask{
      float:left;
      margin-top:0;
      width:100%;
      height:100%;
      background:rgba(7,34,62,.6);
    }
    .rightview{
      width:85%;
      margin-left:15%;
      margin-top:0;
      height:100%;
      background:#dcdcdc;
    }
    .menucontainer{
      color:white;
    }
    li{
    font-size:16px;
    text-align: left;
    list-style: none;
    padding:15px;
    margin:auto 5px;
    }
    li:hover{
      background-color: #07294a;
      cursor: pointer;
    }
   
    #app{
      height:100%;
    }
    .router{
    color:#fff;
    }
    .router:hover{
    color:#fff;
    text-decoration:none;
    }
    .menu-box{
      padding-left:8px;
      padding-right:8px;
    }
    .menu-logo{
      font-size:20px;
      text-align:center;
      margin:20px 15px 5px 15px;
      padding-bottom:10px;
      border-bottom:1px solid #07294a;
    }
   

</style>