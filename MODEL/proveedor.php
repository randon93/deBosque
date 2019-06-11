<?php /**
 *
 */
class Proveedor  {
  private $nombre;
  private $descripcion;
  private $direccion;
  private $id;
  function __construct($nombree, $descripcionn, $direccionn, $idd)  {
    $this->nombre = $nombree;
    $this->descripcion = $descripcionn;
    $this->direccion = $direccionn;
    $this->id = $idd;
  }

  public function getNombre()  {
    return $this->nombre;
  }
  public function getDescripcion()  {
    return $this->descripcion;
  }
  public function getDireccion()  {
    return $this->direccion;
  }
  public function getId()  {
    return $this->id;
  }
}
 ?>
