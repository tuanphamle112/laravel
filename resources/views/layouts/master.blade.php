<html>

<head>
   <title>@yield('title')</title>

   <title>Bootstrap Example</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="/laravel/framework/bootstrap-3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   <script src="/laravel/framework/bootstrap-3.3.7/js/bootstrap.min.js"></script>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

</head>

<body>
   
   @yield('sidebar')
   <nav class="navbar navbar-default">
      <div class="container-fluid">
         <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
         </div>
         <ul class="nav navbar-nav">
            <li class="@yield('active-home')"><a href="home">Home</a></li>
            <li class="@yield('active-page1')"><a href="page1">Page 1</a></li>
            <li class="@yield('active-page2')"><a href="page2">Page 2</a></li>
            <li class="@yield('active-login')"><a href="login">Login</a></li>
            
         </ul>
      </div>
   </nav>

<div class = "container">
   @yield('content')
</div>

</body>
</html>