<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

   
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <style>
     /*the menu nav bar start ------->*/
     html,body{
     width:100%;
     height: 100%; 
     margin:0 ;
     padding: 0;
     border:0;
     background:#f8fafc;
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
      background:#f8fafc;
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
    
<body >
<div id="app" >

    <!-- <div class="rightview"> -->
        
      <router-view ></router-view>

    <!-- </div> -->
</div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
