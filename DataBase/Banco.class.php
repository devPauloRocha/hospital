<?php 

class Banco
{
 
    private static $instance;
    private static $pdo;

    private $host = "localhost";
    private $dbname = "hospital";
    private $user   = "root";
    private $pass  = "";

    public static function instanciar(){

         if(!self::$instance){
           self::$pdo = new Banco(); 
           self::$instance = self::$pdo->conectar(); 
         }

         
        return self::$instance; 
    }

   private function conectar(){
       $conexao = array();

       try{
        
         $conexao = new PDO("mysql:dbname=".$this->dbname.";host=".$this->host,$this->user,$this->pass);

       }catch(PDOException $e){
           //echo "Ocorreu um erro na conexão ao banco. Erro:". $e->getMessage();
          //header("location:https://www.google.com.br");
         die("DataBase com erro na conexão. Erro:".$e->getMessage());

       }
       
     return $conexao;
   }



}



?>