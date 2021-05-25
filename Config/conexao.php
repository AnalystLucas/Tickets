<?php

class conexao{
    
    public static function Db(){
        $host = "localhost";
        $db = "tickets";
        $user = "root";
        $password = "";
 
        $con = new \PDO("mysql:host=$host; dbname=$db; chars=utf8", $user, $password);
        
        if($con == TRUE){
            return $con;
        }else{
            return "Erro: verificar conexão com o banco !";
        }
    }
}
