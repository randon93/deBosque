<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/css/bootstrap.css">
<script type="text/javascript" src="<?php echo constant('URL');?>public/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo constant('URL');?>public/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/css/style.css">
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
         <div class="nav-item active">
            <a class="nav-link" href="#"></a>
          </div>
      <div class="nav-item active">
            <a class="nav-link" href="#"></a>
          </div>

        </form>
      </div>
</nav>

<div id="vista">
    <?php require constant('VISTA') . ".php"; ?>
</div>


</body>
</html>
