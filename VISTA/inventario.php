<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/css/bootstrap.css">
<script type="text/javascript" src="<?php echo constant('URL');?>public/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo constant('URL');?>public/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<head>
	<title>Administrar Inventario</title>
</head>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script >
$(document).ready(function(){
  $("#myInput2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable2 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script >
$(document).ready(function(){
  $("#myInput3").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable3 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script >
$(document).ready(function(){
  $("#myInput5").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable5 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<body class="bg-light">


<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="index.html">Del Bosque</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">&nbsp&nbspInicio&nbsp&nbsp <i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="galeria.html">&nbsp&nbspGaleria&nbsp&nbsp<i style='font-size:24px' class='far'>&#xf302;</i></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="producto.html">&nbsp&nbspProductos&nbsp&nbsp<i class="fas fa-eye"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="inventario.html">&nbsp&nbspInventario&nbsp&nbsp<i style='font-size:24px' class='fas'>&#xf1b3;</i></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
<div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img src="img/ingeniero.png">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="inicio.html">Inicia Sesion</a>
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
<div class="row">
  <div class="col-sm-3 media border p-3">

  <div class="container">
  <ul class=" nav nav-tabs nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#crearp">Crear Un Producto</a>
      <hr>

      <a class="nav-link" data-toggle="tab" href="#aggprod">Agregar Producto</a>
    <hr>

      <a class="nav-link" data-toggle="tab" href="#lstprod">Listar Productos</a>
       <hr>

      <a class="nav-link" data-toggle="tab" href="#crearmtp">Crear Materia Prima</a>
      <hr>
      <a class="nav-link" data-toggle="tab" href="#crearprov">Crear Proveedor</a>
       <hr>
      <a class="nav-link" data-toggle="tab" href="#lstmtp">Listar Materias Primas</a>
      <hr>
      <a class="nav-link" data-toggle="tab" href="#aggmtp">Agregar Materias Primas</a>
    </li>
  </ul>

</div>
</div>
  <div class="col-sm-7 media border p-3">


<div class="container bg-white">
  <!-- Tab panes -->

  <div class="tab-content">
    <div id="crearp" class="container tab-pane active"><br>
			<form class="" action="<?php echo constant('URL');?>administrad/registroProducto" method="post">
      <h3>Crear Producto</h3>
      <br>
     <div class="form-group">
       <label >Nombre del Producto</label>
       <input type="text" class="form-control" name="nombre">
     </div>
     <br>
     <div class="form-group">
       <label >Descripcion del Producto</label>
       <textarea class="form-control" rows="3" id="descriptt" name="descripcion"></textarea>
     </div>
     <br>
      <div class="form-group">
       <label >Cantidad de Contenido del Producto</label>

     </div>
     <div class="form-inline">
       <input type="text" class="form-control" name="cantidad">
  <select class="form-control" id="sel1">
    <option>Gramos</option>
    <option>Kilos</option>
    <option>Litros</option>
    <option>Mililitros</option>
  </select>
     </div>
      <br>
       <div class="form-group">
       <label >Ingredientes </label>
       <textarea class="form-control" rows="3" id="ingre" placeholder="Recuerde separarlos por una (Coma , ) ..." name="ingredientes"></textarea>
     </div>
      <br>
      <p align="right"><input type="submit" class="btn btn-success" value="Crear producto" ></p>
				</form>
    </div>

    <div id="aggprod" class="container tab-pane fade" ><br>

   <h3>Agregar Productos al Inventario</h3>
   <br>
   <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre producto</th>
        <th>Contenido</th>
        <th>Medida</th>
        <th>Agregar unidades</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>Arequipe</td>
        <td>750</td>
        <td>Mililitros</td>
         <td><input type="text" class="form-control" id="usr"></td>
      </tr>
      <tr>
        <td>Yogurt</td>
        <td>1</td>
        <td>Litro</td>
         <td><input type="text" class="form-control" id="usr"></td>
      </tr>
      <tr>
        <td>leche condensada</td>
        <td>1</td>
        <td>kilogramo</td>
         <td><input type="text" class="form-control" id="usr"></td>
      </tr>
  <tr>
        <td>leche condensada</td>
        <td>500</td>
        <td>gramos</td>
         <td><input type="text" class="form-control" id="usr"></td>
      </tr>

    </tbody>
  </table>
  <br>
   <p align="right"><button type="button" class="btn btn-success" id="cmdcontra">Agregar Productos</button></p>
</div>



    <div id="lstprod" class="container tab-pane fade"><br>
      <h3>Lista de Productos</h3>
      <br>
      <input class="form-control" id="myInput2" type="text" placeholder="Buscar..">
  <br>
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre producto</th>
        <th>Contenido</th>
        <th>Medida</th>
        <th>Unidades en existencia</th>
      </tr>
    </thead>
    <tbody id="myTable2">
			<?php foreach ($this->productoss as $pro) { ?>
      <tr>
        <td><?php echo $pro->getNombre(); ?></td>
        <td><?php echo $pro->getContenido(); ?></td>
        <td><?php echo $pro->getMedida(); ?></td>
         <td align="center"><?php echo $pro->getCantidad(); ?></td>
      </tr>
		<?php } ?>
    </tbody>
  </table>

</div>

<div id="crearmtp" class="container tab-pane fade" ><br>
	<form  action="<?php echo constant('URL');?>administrad/registroMateriaPrima" method="post">
   <h3>Crear Materia prima</h3>
      <br>
     <div class="form-group">
       <label >Nombre de la Materia Prima</label>
       <input type="text" class="form-control" name="nombre">
     </div>
     <br>
     <div class="form-group">
       <label >Descripcion :</label>
       <textarea class="form-control" rows="2" id="descriptt" name="descripcion"></textarea>
     </div>
     <br>
      <div class="form-group">
       <label >Unidad de Medida</label>

     </div>
     <div class="form-group">
  <select class="form-control" id="sel2">
    <option>Gramos</option>
    <option>Kilos</option>
    <option>Litros</option>
    <option>Mililitros</option>
  </select>
     </div>
      <br>
      <div class="form-group">
       <label >Proveedor :</label>
     </div>

       <div class="form-group">
  <select class="form-control" id="sel3" name="provee">
		<?php foreach ($this->proveedoress as $prove) {?>
    <option value="<?php echo $prove->getId() ?>"><?php echo $prove->getNombre(); ?></option>
	<?php } ?>
  </select>
     </div>
  <br>
   <p align="right"><input type="submit" class="btn btn-success" value="Crear Materia Prima"></p>
 </form>
</div>

<div id="crearprov" class="container tab-pane fade" ><br>
	<form class="" action="<?php echo constant('URL');?>administrad/registroProveedor" method="post">
   <h3>Crear Proveedor</h3>
      <br>
     <div class="form-group">
       <label >Nombre del Proveedor</label>
       <input type="text" class="form-control" name="nombre">
     </div>
     <br>
     <div class="form-group">
       <label >Descripcion :</label>
       <textarea class="form-control" rows="2" id="descriptt" name="descripcion"></textarea>
     </div>
     <br>
      <div class="form-group">
       <label>Direccion :</label>
      <input type="text" class="form-control" name="direccion">
     </div>

  <br>
   <p align="right"><input type="submit" class="btn btn-success" value="Crear Proveedor"></p>
	 	</form>
</div>


<div id="lstmtp" class="container tab-pane fade"><br>
      <h3>Lista de Materias Primas</h3>
      <br>
      <input class="form-control" id="myInput5" type="text" placeholder="Buscar..">
  <br>
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre Materia prima</th>
        <th>descripcion</th>
        <th>Medida</th>
        <th>proveedor</th>
      </tr>
    </thead>
    <tbody id="myTable5">
			<?php foreach ($this->materiass as $mate) { ?>
        <tr>
        <td><?php echo $mate->getNombre() ?></td>
        <td><?php echo $mate->getDescripcion() ?></td>
        <td><?php echo $mate->getMedida() ?></td>
         <td align="center"><?php echo $mate->getProveedor() ?></td>
      </tr>
		<?php } ?>

    </tbody>
  </table>

</div>


    <div id="aggmtp" class="container tab-pane fade" ><br>

   <h3>Agregar Materias primas Inventario</h3>
   <br>
   <input class="form-control" id="myInput3" type="text" placeholder="Buscar..">
  <br>
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre Materia Prima</th>
        <th>Proveedor</th>
        <th>Medida</th>
        <th>Agregar cantidad</th>
      </tr>
    </thead>
    <tbody id="myTable3">
			<?php foreach ($this->materiass as $mate) { ?>

      <tr>
				<form  action="<?php echo constant('URL');?>administrad/actualizarMateria" method="post">
        <td ><input type="text" name="canti" value="<?php  echo $mate->getNombre() ?>"></td>
        <td><?php echo $mate->getProveedor(); ?></td>
        <td><?php echo $mate->getMedida(); ?></td>
         <td><input type="text" class="form-control" id="usr" name="cant" value="<?php echo $mate->getCantidad(); ?>"></td>
				 <td><p align="right"><input type="submit" class="btn btn-success" id="cmdmtp" value="Actualizar"></p></td>
			 </form>
			</tr>

		<?php } ?>
    </tbody>
  </table>


</div>


</div>

</div>
</div>
</div>
</div>

</body>
</html>
