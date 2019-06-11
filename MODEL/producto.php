<?php /**
 *
 */
class producto  {
  private $nombre;
  private $descripcion;
  private $contenido;
  private $ingredientes;
  private $cantidad;
  private $medida;
  function __construct($name,$medidaa, $contenidoo, $unidades)  {
    $this->nombre = $name;
    $this->medida = $medidaa;
    $this->contenido = $contenidoo;
    $this->cantidad = $unidades;

  }

  public function getNombre()  {
    return $this->nombre;
  }
  public function getMedida()  {
    return $this->medida;
  }
  public function getContenido()  {
    return $this->contenido;
  }
  public function getCantidad()  {
    return $this->cantidad;
  }
}
 ?>
