<?php

class ControllerCore extends ControllerView{

   public static $BASE = "http://localhost/hospital/";
 
  function start(){
    
    $url = "/";

    if(isset($_GET['url'])){
      $url .=  $_GET['url'];
      
    }
  

    $parametros = array();
    if(!empty($url) && $url != "/"){
         $url = explode("/",$url); 
         
         
         array_shift($url);

         $Controller = "Controller".ucfirst($url[0]);
         array_shift($url);
          
         
         if(isset($url[0]) && !empty($url[0])){
             $metodo = addslashes($url[0]);
              array_shift($url);
         }else{
             $metodo = "home";
         }
        

         if(count($url) > 0){
             $parametros = $url;
         }
          
    }else{
        $Controller = "ControllerHome";
        $metodo = "home";
    }

    $c = new $Controller();
    call_user_func_array(array($c,$metodo),$parametros);
    
  }   

}

?>