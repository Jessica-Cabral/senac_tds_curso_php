<?php

//criar um array
$frutas =array("Goiaba","Acerola","Abacate","Laranja");

//Acessar posicao
echo "<br>";
echo $frutas[1];

//alterar posicao
echo "<br>";
$frutas[0] ="Manga";
echo $frutas[0];

//Adicionar um novo elemento
array_push($frutas,"Mamao");
echo "<br>";
echo $frutas[4];

//remover um elemento
echo "<br>";
$frutas = array_diff($frutas,[3]);

//degug
var_dump($frutas) //o var_dump mostra todo o conteudo da variavel. Usar para debugar e testa o codigo
?>