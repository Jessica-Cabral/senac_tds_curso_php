<?php
//data atual
$data = new DateTime();
var_dump($data);
echo "<br><br>";
//data específica
$data_especifica = new DateTime('2025-01-01');
var_dump($data_especifica);
echo "<br><br>";
//data futura
$data_futura = new DateTime('+1 month');
var_dump($data_futura);
echo "<br><br>";
//formatar data
echo $data->format('d/m/Y');
echo "<br><br>";
//subtracao de datas
$inicio = new DateTime('2025-02-20');
$fim = new DateTime('2025-11-30');
$dias_restantes = $inicio->diff($fim);
// echo "<br><br>";
echo "Faltam: ".$dias_restantes->days;
?>