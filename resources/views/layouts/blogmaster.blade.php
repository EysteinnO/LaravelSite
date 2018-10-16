
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>


<!--Navigation bar -->
<header>
@include ('layouts.blognav')
</header>

<!--Base layout-->
<div class="container">
<div class="row">    
<div class="col-sm-8 blog-main">
@yield ('blogcontent')
</div>

<div class="col-sm-4 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">   
    <!--Sidebar start-->
      @include('layouts.blogarticle') 
      @yield('articlecontent')  <!--Content-->
    <!--Sidebar ened-->
    </div>
</div>
</div>
</div>  
</div>
<!--Footer-->
@include ('layouts.blogfooter')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
