<?php 
include "Manager_db.php";

class Auth {
    public static function check(){
        $tabela = "usuarios";
        $check = manager_db::query($tabela);

        return $check->fetchAll();
        
    }
    public static function verify($usuario, $senha){

        $verify = Auth::check();
        $checks = [];
        $rows = count($verify);
        
        if(count($verify) > 0){
            for($i = 0; $i < $rows; $i++ ){

                $senhabd = $verify[$i]['senha'];
               
                if($verify[$i]['usuario'] == $usuario){
                    
                    if(password_verify($senha, $senhabd) == true){

                        // echo "Usuário e senha Validado !";
                        $checks = ['Message'=>"Login liberado",'Error'=>false];
 
                        session_start();
                        $_SESSION['Nome'] = $verify[$i]['nome'];
                        $_SESSION['Logado'] = true;

                        return $checks;
                        //quando encontrado o usuário não precisa fazer mais verificações por isso passo o valor de $rows para o $i
                        $i = $rows;
                    }
                    else{
                        $checks = ['Message'=>"Login bloqueado",'Error'=>true];
                        return $checks;
                    }
                }               
            }
            $checks = ['Message'=>"Cadastro não encontrado",'Error'=>true];
            return $checks;
        }else{
            $checks = ['Message'=>"Sem informação no Banco de Dados",'Error'=>true];
            return $checks; 
        }

    }
}