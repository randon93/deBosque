<?php /**
 *
 */
class InicioModel extends Modelo{

  function __construct()  {
    parent::__construct();
  }

  public function loginM($user, $passwork)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM user WHERE nombre = :nombre AND cedula = :passwork");
    $consultar -> execute( array( ":nombre"=>$user, ":passwork"=>$passwork ) );
    foreach ($consultar as $exito) {
      return TRUE;
    }
    return false;
  }
}
 ?>
