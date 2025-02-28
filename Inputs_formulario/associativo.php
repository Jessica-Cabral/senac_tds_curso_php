<?php
$cliente = array (
    array('nome'=>'Maria','idade'=>35),
    array('nome'=>'Carol','idade'=>30),
    array('nome'=>'Erivan','idade'=>40),
);

//acesso direto
//cliente 1
echo $nome = $cliente[0]['nome'];
echo "<br>";
echo $nome = $cliente[0]['idade'];

//acesso via foreach
foreach ($cliente as $campo => $valor) {
    echo "<br> Nome: ".$valor['nome'];
    echo "<br> Idade: ".$valor['idade'];
    echo "<br>________________________";
}


?>