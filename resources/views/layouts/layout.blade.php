<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1, userscalable=yes">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/
3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/
3.3.6/js/bootstrap.min.js"></script>



<!-- Custom CSS -->
@section('styles_laravel')
 
 <!-- Bootstrap Core CSS -->
 <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
 <link media="all" type="text/css" rel="stylesheet" href="/assets/css/app.css">


 <!-- Fonts -->
 <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
 @show
 @yield('mis_estilos')
</head>
<style >

</style>
<body style="background-color:grey;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
      <a class="navbar-brand" href="#">Footwear</a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('calzado.index') }}">Ver Calzados <span class="sr-only"></span></a></li>
        
      </ul>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('venta.index') }}">Registro de ventas <span class="sr-only">(current)</span></a></li>
        
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="container-fluid" style="margin-top: 100px">
@yield('content')
</div>

<style type="text/css">
.table {
border-top: 2px solid #ccc;

}
}
</style>
<!-- Scripts -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>