<?php 

class ControllerServicos extends ControllerCore{


 function home(){
     
    $serv = array();

 
  $this->loadTemplate("Template","ServicosHome", $serv);

 } 
    

}

?>