<?php 

class ControllerHome extends ControllerCore{


 function home(){
     
    $dados = array();
 
    $this->loadTemplate("Template","Home", $dados);
     
 } 
    

}

?>