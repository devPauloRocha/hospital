<?php 

class ModelContato
{

    private $banco;


    public function __construct()
    {
               
        try{
          $this->banco = Banco::instanciar();

        }catch(Exception $e){
           echo "Erro conexao";
        }
        
    }

    public function getClienteAll(){
        $dados = array();

        $sql = "SELECT * FROM cliente";
        $rs = $this->banco->query($sql);

         if($rs->rowCount() > 0){
             $dados = $rs->fetchAll();
         } 

         return $dados;
    } 


}



?>