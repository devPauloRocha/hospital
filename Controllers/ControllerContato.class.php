<?php 

class ControllerContato extends ControllerCore{


 function home(){
     
    $ct = array();

  $this->loadTemplate("Template","ContatoHome", $ct);

 } 
    

}

?>