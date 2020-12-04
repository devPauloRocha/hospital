<?php 

class ControllerView
{

    public function loadTemplate($template, $view, $dados = array()){
          extract($dados);
          require("../Views/".$template.".php");
    }

    public function loadInTemplate($view, $dados = array()){
                 extract($dados);
                 require("../Views/".$view.".php");
    }
}

?>