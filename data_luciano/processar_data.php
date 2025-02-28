<?php 
//data nascimento
$data_nascimento = $_POST['dn'];
// echo $data_nascimento;
$nova_data = new DateTime($data_nascimento);
$nova_data ->createfromformat('d/m/Y', $data_nascimento);
echo $nova_data->format('d-m-Y');
?>