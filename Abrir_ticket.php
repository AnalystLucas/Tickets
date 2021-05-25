<?php

include "manager_db.php";

$dados = $_POST;
$tabela = "demandas";

$return_db = manager_db::to_save($dados, $tabela);

if($return_db == true){

    echo "Ticket Aberto !";

}else{
    echo "Não foi possivel abrir sua Solicitação por favor tentar novamente, caso persiste o erro entrar em contato com o T.I";
}