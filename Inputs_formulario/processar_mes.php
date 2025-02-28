<?php

//mes
$mes =$_POST['mes'];

switch ($mes){
    case '1':
        echo "Janeiro";
        break;
    case '2':
        echo "Fevereiro";
        break;
    case '3':
        echo "Marco";
        break;
    default:
        echo "Mes invalido";
        break;

}
?>