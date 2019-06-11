<?php /**
 *
 */
class vistaModel extends Modelo {

  function __construct()  {
    parent::__construct();
  }

  public function listProductos() {
    $array = [];
    $con = $this->bd->conectar();
    $cosnultar = $con ->prepare("SELECT * FROM producto");
    $cosnultar->execute();
    foreach ($cosnultar as $pro) {
      $prod = new Producto($pro['nombre'], $pro['contenido'], $pro['id_medida'], $pro['cantidad']);
      array_push($array, $prod);
    }
    return $array;
  }

  public function listProveedores()  {
    $array = [];
    $con = $this->bd->conectar();
    $cosnultar = $con ->prepare("SELECT * FROM proveedor");
    $cosnultar->execute();
    foreach ($cosnultar as $pro) {
      $prod = new Proveedor($pro['nombre'], $pro['descripcion'], $pro['direccion'], $pro['id']);
      array_push($array, $prod);
    }
    return $array;
  }

  public function listMaterias()  {
    $array = [];
    $con = $this->bd->conectar();
    $cosnultar = $con ->prepare("SELECT * FROM materia_prima");
    $cosnultar->execute();
    foreach ($cosnultar as $pro) {
      $prod = new Materia($pro['nombre'], $pro['descripcion'], $pro['id_medida'], $pro['id_proveedor'], $pro['cantidad']);
      array_push($array, $prod);
    }
    return $array;
  }
}
 ?>
