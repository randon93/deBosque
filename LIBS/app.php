<?php
//require_once 'controllers/errores.php';

class App{

  function __construct(){
     echo "<p>Nueva app</p>";

     $url = isset($_GET['url']) ? $_GET['url']: null;
     $url = rtrim($url, '/');
     $url = explode('/', $url);
 //var_dump($url);
     if(empty($url[0])){
            $archivoController = 'controlador/InicioControler.php';
            require_once $archivoController;
            $controller = new InicioControler();
            $controller->loadModel('inicio');
            $controller->getVistaCtr()->render('inicio');
            return false;
        }

     var_dump($url);
     $archivoController = 'controlador/' . $url[0] . 'Controler.php';

     if(file_exists($archivoController)){echo "existo";
         require_once $archivoController;
         $contr = $url[0] . "Controler";
         $controller = new $contr;
         $controller->loadModel($url[0]);
         if(isset($url[1])){
             $controller->{$url[1]}();
         }
     }else{echo "no escisto";
         $controller = new Error();
     }
 }
}

?>
