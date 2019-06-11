<?php /**
 *
 */
class Controlador {

  private $modelo;
  private $vista;

  public function getVistaCtr()  {
    return $this->vista;
  }
  public function getModelCtr()  {
    return $this->modelo;
  }

  function __construct(){ echo "<BR /> CREANDO CONTROLER PADRE";
      //echo "<p>Controlador base</p>";
      $this->loadView();
  }

  function loadModel($model){
      $url = 'model/'.$model.'Model.php';

      if(file_exists($url)){
          require_once $url;
          $modelName = $model . "Model";
          $this->modelo = new $modelName();
      }
  }

  public function loadView()  {
    $this->vista = new Vista();
  }
}
 ?>
