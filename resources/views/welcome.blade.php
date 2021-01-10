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
    width: 94px;
    text-align: left;
    list-style: none;
    }
    #app{
      height:100%;
    }

    </style>
    <body leftmargin = 0 topmargin = 0>
    <div class="leftnav"> 
    <div class="leftmask">
<div class="menucontainer">
        <nav class="menu">
            <a id="menubtn" class="toggle-nav" href="#">☰</a>
            <div class="menu-logo"><a>LOGO</a></div>
            <ul id="menuUl" class="">
                <li class="current-active"><a>home</a></li>
                <li><a>new</a></li>
                <li><a>products</a></li>
                <li><a>about</a></li>
            </ul>
        </nav>
</div>
    </div>
  </div>
    <div class="rightview">
        <div id="app" >
          

       

        <router-view ></router-view>

        </div>
        <!-- <a href="https://github.com/PhivosJiar/Todo_list" >12345</a> -->
  </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
