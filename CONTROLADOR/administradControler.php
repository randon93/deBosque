<?php /**
 *
 */
class AdministradControler extends Controlador{

  function __construct()  {
    parent::__construct();
    $this->loadModel('administrad');
  }

  public function registroProducto()  {
    if ( $this->getModelCtr()->registroProductoM() ) {
      echo "<script> alert('producto agregado exitosamente');</script>";
    header ("Location: http://127.0.0.1/delbosque/vista/inventario");
    }else {
        echo "<script> alert('ocurrio un error intentalo de nuevo');</script>";
        header ("Location: http://127.0.0.1/delbosque/vista/inventario");
    }
  }

  public function registroMateriaPrima()  {
    if ( $this->getModelCtr()->registroMateriaPrimaM() ) {
      echo "<script> alert('Materia prima agregado exitosamente');</script>";
    header ("Location: http://127.0.0.1/delbosque/vista/inventario");
    }else {
        echo "<script> alert('ocurrio un error, intentalo de nuevo');</script>";
        header ("Location: http://127.0.0.1/delbosque/vista/inventario");
    }
  }
  public function registroProveedor()  {
    if ( $this->getModelCtr()->registroProveedorM() ) {
      echo "<script> alert('Proveedor agregado exitosamente');</script>";
    header ("Location: http://127.0.0.1/delbosque/vista/inventario");
    }else {
        echo "<script> alert('ocurrio un error, intentalo de nuevo');</script>";
        header ("Location: http://127.0.0.1/delbosque/vista/inventario");
    }
  }

  public function actualizarMateria()  {
    $this->getModelCtr()->actualizarMateriaM();
    header ("Location: http://127.0.0.1/delbosque/vista/inventario");
  }
}
 ?>
