<?php

$nome="Alberto";
//primeiro valor flutuante
$valor1=100;

//segundo valor flutuante
$valor2 = 3;

$resultado=$valor1/$valor2;

echo"Ola ".$nome." o valor é ".number_format($resultado,2)."<br><br> ";

echo"Ola ".$nome." o valor é ".number_format($resultado,2,",,,,,","#######")."<br><br> ";

$resultado1= intval($valor1/$valor2);

echo"Ola ".$nome." o valor é ".number_format($resultado1,2);

?>