<?php
//incluir funções
include_once ("funcoes.php");
//coletar numeros
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

//definir operação
$operacao = $_POST['operacao'];

//chamar funções
// if($operacao == "soma"){
//     echo "O resultado da soma é". somar($numero1,$numero2);
// } elseif ($operacao == "subtracao"){
//     echo "O resultado da subracao é ". subtrair($numero1,$numero2);
// } elseif ($operacao == "multiplicacao"){
//     echo "O resultado da multiplicação é ". multiplicar($numero1,$numero2);
// } elseif ($operacao == "divisao"){
//     echo "O resultado da divisao é ". dividir($numero1,$numero2);
// } else
//     echo "Dados inválidos!";

//calcular($numero1,$numero2,$operacao);

echo "O resultado é: ".calculadora($numero1,$numero2,$operacao);

?>