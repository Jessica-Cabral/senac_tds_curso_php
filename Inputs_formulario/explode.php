<?php
echo $cpf = "012.345.678-90";
$novo_cpf = explode(".",$cpf);
$novo_cpf = $novo_cpf[0].$novo_cpf[1].$novo_cpf[2];
$novo_cpf = explode("-",$novo_cpf);
$novo_cpf = $novo_cpf[0].$novo_cpf[1];

//var dump
var_dump($novo_cpf);

?>