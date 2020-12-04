<?php
session_start();



spl_autoload_register(function($classe){

    if(file_exists("Controllers/".$classe.".class.php")){
        require_once("Controllers/".$classe.".class.php");
    }else if(file_exists("Models/".$classe.".class.php")){
        require_once("Models/".$classe.".class.php");
    }

});

$inicio = new ControllerCore();
$inicio->start();

?>