<?php

include "Auth.php";

$dados = $_POST;
$tabela = "usuarios";

$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

$verify = Auth::verify($dados['usuario'], $dados['senha']);

if($verify['Error'] == true && $verify['Message'] == "Cadastro não encontrado"){
    
    $retorno = manager_db::to_save($dados, $tabela); 

    header("location: View/Index.php");

}else if($verify['Error'] == true && $verify['Message'] == "Sem informação no Banco de Dados"){

    $retorno = manager_db::to_save($dados, $tabela); 

    header("location: View/Index.php");

}else{

    echo "Nome de Usuário não disponivel por favor alterar !";
}
    



