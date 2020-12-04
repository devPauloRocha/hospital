<?php 

class ControllerEquipe extends ControllerCore{


 function home(){
     
    $serv = array();

 
  $this->loadTemplate("Template","EquipeHome", $serv);

 } 
    

}

?>