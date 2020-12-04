<?php 

class ModelUser{

    private $banco;


    public function __construct()
    {
               
        try{
          $this->banco = Banco::instanciar();

        }catch(Exception $e){
           echo "Erro conexao";
        }
        
    }


    public function isLogin(){
        
        if(isset($_SESSION['loginPainel']) && !empty($_SESSION['loginPainel'])){
            return true;
        }else{
            return false;
        }

    }

}

public function validedLogin($email,$password){

    $options = [
        'const' => 10
    ];

    $senhaEncrypt = password_hash($password, PASSWORD_DEFAULT, $options);

    $sqlUser = "SELECT * FROM user WHERE email = :email";
    $sqlUser = $this->banco->prepare($sqlUser);
    $sqlUser->binValue(':email',$email);
    $sqlUser->execute();

    if($sqlUser->rowCount() > 0){
        $rs = $sqlUser->fechAll();
    }

    if (password_verify($senhaEncrypt,$rs['0']['password'])){
        $dadosUser = [
            'email' => $rs['0']['email'],
            'iduser' => $rs['0']['iduser']
        ];
        $_SESSION['loginPainel'] = $rs['0']['email'];
    }


}

?>