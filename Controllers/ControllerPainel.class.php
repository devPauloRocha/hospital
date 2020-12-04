<?php 

class ControllerPainel extends ControllerCore{


    public function __construct()
    {
        $userLogin = new ModelUser();

            if(!$userLogin->isLogin()){
                header('location:'.ControllerCore::$BASE.'painelLogin');
            }
            
    }

    function home(){
        $dados = array();

        $this->loadTemplate("TemplatePainel", "HomePainel", $dados);
    }
}

?>