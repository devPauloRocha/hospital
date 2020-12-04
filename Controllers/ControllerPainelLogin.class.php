<?php 

class ControllerPainelLogin extends ControllerCore{
    public function home(){
        
        if(isset ($_POST['email']) && !empty($_POST['email'])
        && isset ($_POST['password']) && !empty($_POST['password'])
        {
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        $loginUser = new ModelUser();
        if($loginUser->validedLogin($email,$password)){
            
        };
        }
        $this->loadTemplate('TemplateLogin','Login', $dados= array());

    }
}

?>