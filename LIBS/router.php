<?php /**
 *
 */
class Router {

  function __construct()  {
    echo "<br />creando router";
    require_once "CONTROLADOR/recibidorControlador.php";
    $this->controlador = new RecibidorControlador();
  }
}
 ?>
