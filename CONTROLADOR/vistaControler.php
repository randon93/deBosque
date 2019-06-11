<?php /**
 *
 */
class vistaControler extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function login()  {
    $this->getVistaCtr()->render('login');
  }

  public function index()  {
    $this->getVistaCtr()->render('index');
  }

  public function inicio()  {
    $this->getVistaCtr()->render('inicio');
  }

  public function inventario()  {
    $productos = $this->getModelCtr()->listProductos();
    $this->getVistaCtr()->productoss = $productos;
    $this->getVistaCtr()->proveedoress = $this->getModelCtr()->listProveedores();
    $this->getVistaCtr()->materiass = $this->getModelCtr()->listMaterias();
    $this->getVistaCtr()->render('inventario');
  }

  public function producto()  {
    $this->getVistaCtr()->render('producto');
  }
}
 ?>
