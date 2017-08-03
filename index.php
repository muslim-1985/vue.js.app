<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>my-project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
  
        <div id="app">
          <nav>
            <router-link to='/home'>+Главная</router-link>
            <router-link to='/app'>+Приложение</router-link>
            <router-link to='/blog'>+Блог</router-link>
          </nav>
          <!-- <router-view></router-view> -->
        </div>
        <div id="app2">
          
          <router-view></router-view>
        </div>
    
    <script src="/dist/build.js"></script>
  </body>
</html>
