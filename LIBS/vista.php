<?php /**
 *
 */
class Vista{

  function __construct() {
    echo "<br /> CREANDO VISTA PADRE";
  }

  function render($nombre){
       include 'vista/' . $nombre . '.php';
   }
}
 ?>
