<?php
//incluir a classe cliente pf
include_once 'ClientePFClass.php';

//dados do cliente
$nome = $_POST['nome_pf'];
$cpf = $_POST['cpf_pf'];

//instanciar a classe
$objClientePF = new ClientePFClass();
$objClientePF->inserirClientePF($nome,$cpf);