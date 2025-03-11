<?php
//incluir a classe UtilitarioClass
include_once "UtilitarioClass.php";
//acessar os métodos estáticos 
$palavra = " Flamengo";
echo UtilitarioClass::maiuscula($palavra);
echo "<br>".UtilitarioClass::tamanho_string($palavra);
//criar instância
$objUtil = new UtilitarioClass();
echo"<br>".$objUtil->retirar_espaco($palavra);
?>