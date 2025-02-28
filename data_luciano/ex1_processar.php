<?php
//altura
$altura = $_POST['altura'];
//sexo
$sexo = $_POST['sexo'];
//verificar se é M ou F
//Para homens: Peso ideal - P = (72.7 * Altura) – 58
//Para mulheres: Peso ideal - P = (62.1 * Altura) – 44.7
if ($sexo == 'M') {
    $peso = (72.7 * $altura) - 58;
} else {
    $peso = (62.1 * $altura) - 44.7;
}
echo "O peso ideal para a altura {$altura} é: " . round($peso, 2) . " kg";
?>