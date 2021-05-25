<?php 

include "Auth.php";
//senha do teste é sabin
$teste = Auth::verify("Lucas","sabin");

// echo $teste;
var_dump($teste);