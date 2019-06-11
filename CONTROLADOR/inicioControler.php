<?php /**
 *
 */
class InicioControler extends Controlador{

  function __construct()  {
    parent::__construct();
    //$this->loadModel('inicio');
  }

  public function render()  {
    $this->getVistaCtr()->render('inicio');
  }

  public function login()  {
    $user = $_POST['usuario'];
    $passwork = $_POST['password'];
    if ( $this->getModelCtr()->loginM($user, $passwork) ) {
      require_once "vista/index.php";
    }else {
      require_once "vista/inicio.php";
    }
  }
}
 ?>
