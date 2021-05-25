<?php 

include "Auth.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$result = Auth::verify($usuario, $senha);

if($result['Error'] == true){

    echo $result['Message'];

}else{

    header("Location: View/chamados.php");
    
}
