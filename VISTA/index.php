<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/css/bootstrap.css">
<script type="text/javascript" src="<?php echo constant('URL');?>public/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo constant('URL');?>public/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<head>
	<title>Bienvenido A Del Bosque</title>
</head>
<body class="bg-light">



<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="<?php echo constant('URL');?>vista/index.php">Del Bosque</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL');?>vista/index">&nbsp&nbspInicio&nbsp&nbsp <i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL');?>vista/galeria.php">&nbsp&nbspGaleria&nbsp&nbsp<i style='font-size:24px' class='far'>&#xf302;</i></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL');?>vista/producto.php">&nbsp&nbspProductos&nbsp&nbsp<i class="fas fa-eye"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL');?>vista/inventario.php">&nbsp&nbspInventario&nbsp&nbsp<i style='font-size:24px' class='fas'>&#xf1b3;</i></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
<div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img src="<?php echo constant('URL');?>public/img/ingeniero.png">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo constant('URL');?>vista/inicio.php">Inicia Sesion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Administrar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cerrar sesion</a>
        </div>
      </div>
     <div class="nav-item active">
        <a class="nav-link" href="#"></a>
      </div>
  <div class="nav-item active">
        <a class="nav-link" href="#"></a>
      </div>

    </form>
  </div>
</nav>
<br>
<br>
<div class="container bg-light">
  <br>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo constant('URL');?>public/img/caro1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Del Bosque</h3>
        <p>Nuestra nueva sucursal en la gran ciudad</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo constant('URL');?>public/img/caro2.jpg" alt="Chicago" width="100%" height="500">
      <div class="carousel-caption">
        <h3>Del Bosque</h3>
        <p>Nuestra Nueva Maquinaria</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo constant('URL');?>public/img/caro3.jpg" alt="New York" width="100%" height="500">
      <div class="carousel-caption">
        <h3>Del Bosque</h3>
        <p>Descubre Quienes son Nuestros Empleados</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<p align="center"><h1>Noticias</h1></p>
<p align="center"><strong>Noticia de prueba</strong></p>


<div class="container">

<p class="border">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, quam in dignissim molestie, dolor tellus malesuada orci, sollicitudin vulputate diam nisl id orci. Curabitur euismod purus mattis, laoreet ligula nec, auctor enim. Proin vulputate tortor ut diam sollicitudin consectetur vel sit amet risus. Ut suscipit odio at nisl sollicitudin lacinia. Praesent turpis nibh, vestibulum at nibh et, viverra vehicula sem. Ut et convallis enim. Vestibulum neque odio, viverra non hendrerit quis, lacinia a libero. Nulla facilisi.

Curabitur vulputate tempus cursus. Vivamus at tempus tortor. Duis nisl urna, semper nec suscipit ut, mattis id quam. Nam dictum enim quis libero tincidunt, eget molestie arcu pretium. Praesent porttitor libero sed nisl aliquet, ut lacinia justo varius. In vel finibus lorem, ac posuere tellus. Nullam sagittis, ipsum ac laoreet aliquam, turpis nisi tempus lorem, quis porttitor odio elit eu tellus. Nullam quis turpis quis eros hendrerit viverra nec eu magna. Sed ut venenatis lacus. Phasellus vitae risus egestas quam gravida sagittis in vitae elit
</p></div>
<p align="center"><strong>Noticia de prueba2</strong></p>


<div class="container">
<p class="border">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, quam in dignissim molestie, dolor tellus malesuada orci, sollicitudin vulputate diam nisl id orci. Curabitur euismod purus mattis, laoreet ligula nec, auctor enim. Proin vulputate tortor ut diam sollicitudin consectetur vel sit amet risus. Ut suscipit odio at nisl sollicitudin lacinia. Praesent turpis nibh, vestibulum at nibh et, viverra vehicula sem. Ut et convallis enim. Vestibulum neque odio, viverra non hendrerit quis, lacinia a libero. Nulla facilisi.

Curabitur vulputate tempus cursus. Vivamus at tempus tortor. Duis nisl urna, semper nec suscipit ut, mattis id quam. Nam dictum enim quis libero tincidunt, eget molestie arcu pretium. Praesent porttitor libero sed nisl aliquet, ut lacinia justo varius. In vel finibus lorem, ac posuere tellus. Nullam sagittis, ipsum ac laoreet aliquam, turpis nisi tempus lorem, quis porttitor odio elit eu tellus. Nullam quis turpis quis eros hendrerit viverra nec eu magna. Sed ut venenatis lacus. Phasellus vitae risus egestas quam gravida sagittis in vitae elit
</p></div>
<footer align="center"><strong>Derechos reservados ©2019 DelBosque </strong></footer>
</div>
<br>
<br>

</body>
</html>
