<?php /**
 *
 */
class Materia {

  private $nombre;
  private $descripcion;
  private $id_medida;
  private $id_proveedor;
  private $cantidad;
  function __construct($nombree,$descripcionn, $medidaa, $proveedorr,$cantidadd)  {
    $this->nombre = $nombree;
    $this->descripcion = $descripcionn;
    $this->id_medida = $medidaa;
    $this->id_proveedor = $proveedorr;
    $this->cantidad = $cantidadd;
  }

  public function getNombre()  {
    return $this->nombre;
  }
  public function getDescripcion()  {
    return $this->descripcion;
  }
  public function getMedida()  {
    return $this->id_medida;
  }
  public function getProveedor()  {
    return $this->id_proveedor;
  }
  public function getCantidad()  {
    return $this->cantidad;
  }
}
 ?>
