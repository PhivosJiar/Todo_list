<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

   
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <style>
     

    </style>
    <body >
    
    <nav class="navbar navbar-expand-lg navbar-light "  style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <img src="https://i.ibb.co/wzB7vmK/notes.png" alt="notes" border="0" width="32px" style="margin:auto px" >
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link"  href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://github.com/PhivosJiar/Todo_list" style="
    padding-left: 15px;
    padding-top: 7px;
"><img  src="https://cdn.iconscout.com/icon/free/png-256/github-153-675523.png" width="20px"  border="0"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>   
        <div id="app">
          
        <router-link to="/">Login</router-link>
        <router-link to="/Todo">about</router-link>
        <router-link :to="{ name: 'Login' }">Login</router-link> |
        <router-link :to="{ name: 'Todo' }">Todo World</router-link>
        <test></test>
       

        <router-view></router-view>

        </div>
        <!-- <a href="https://github.com/PhivosJiar/Todo_list" >12345</a> -->
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
