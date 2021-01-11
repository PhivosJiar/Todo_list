<template>
      <div class="leftnav"> 
    <div class="leftmask">
      <div class="menucontainer">
        <nav class="menu">
           
            <div class="menu-logo"><a>To Do</a></div>
            <ul  class="menu-box">
              Welcome <br>To <br>Todo List
            </ul>
        </nav>
      </div>
    </div>
  </div>
</template>

<style scoped>

     /*the menu nav bar start ------->*/
     html,body{
     width:100%;
     height: 100%; 
     margin:0 ;
     padding: 0;
     border:0;
     background:#000000;
     }
     
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
      text-align:center;
    }
    .menu-logo{
      font-size:20px;
      text-align:center;
      margin:20px 15px 5px 15px;
      padding-bottom:10px;
      border-bottom:1px solid #07294a;
    }
   

</style>