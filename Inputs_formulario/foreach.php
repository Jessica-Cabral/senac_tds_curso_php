<?php
//Criar um array
$frutas = array("Goiaba","Maca","Abacate","Laranja");

//apagar array
unset($frutas[0]);

//var dump
var_dump($frutas);

//die
die("aqui...");

//Forma tradicional
echo "<br>Com FOR";
for ($i = 0; $i < count($frutas); $i++){
    echo "<br>".$frutas[$i];
}

//Forma profissional e elegante
echo "<br>";
echo "<br>Com FOREACH";
foreach ($frutas as $nome_fruta) {
    echo "<br>".$nome_fruta;
}
?>