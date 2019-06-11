<?php /**
 *
 */
class administradModel extends Modelo{

  function __construct()  { echo "<BR /> CREANDO ADMIN MODEL";
    parent::__construct();
  }
  public function registroProductoM()  {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $contenido = $_POST['cantidad'];
    $id_medida = 2;
    $ingredientes = $_POST['ingredientes'];

    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO producto (nombre, descripcion, contenido, id_medida, ingredientes) VALUES (:nombre, :descripcion, :contenido, :medida, :ingredientes)");
    $consultar -> execute( array( ":nombre"=>$nombre, ":descripcion"=>$descripcion, ":contenido"=>$contenido, ":medida"=>$id_medida, ":ingredientes"=>$ingredientes ) );
    return $this->existo($nombre, 'producto');
  }

  public function existo($nombre, $tabla)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM $tabla WHERE nombre = :nombre");
    $consultar -> execute(array(":nombre"=>$nombre));
    foreach ($consultar as $exito) {
      return true;
    }
    return false;
  }

  public function registroMateriaPrimaM()  {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id_proveedor = $_POST['provee'];
    echo "<h1>$id_proveedor</h1>";
    $id_medida = 2;
    $cantidad = 0;

    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO materia_prima (nombre, descripcion, id_medida, id_proveedor, cantidad) VALUES (:nombre, :descripcion, :medida, :provee, :cantidad)");
    $consultar -> execute( array( ":nombre"=>$nombre, ":descripcion"=>$descripcion, ":medida"=>$id_medida, ":provee"=>$id_proveedor, ":cantidad"=>$cantidad ) );
    return $this->existo($nombre, 'materia_prima');
  }

  public function registroProveedorM()  {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO proveedor (nombre, descripcion, direccion) VALUES (:nombre, :descripcion, :direccion)");
    $consultar -> execute( array( ":nombre"=>$nombre, ":descripcion"=>$descripcion, ":direccion"=>$direccion ) );
    return $this->existo($nombre, 'proveedor');
  }

  public function actualizarMateriaM()  {
    $nombre = $_POST['canti'];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("UPDATE materia_prima SET cantidad = :cant WHERE nombre = :nombre");
    $consultar -> execute(array(":cant"=>$_POST['cant'], ":nombre"=>$nombre));
  }



}
 ?>
