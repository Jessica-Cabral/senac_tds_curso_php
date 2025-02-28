<?php
//criar sessao
session_start();

//idade
$_SESSION['idade'] = $_POST['idade'];

// função para apagar sessão nome
// unset($_SESSION['nome']);

echo "Seu nome é ". $_SESSION['nome'] . " e sua idade é ".$_SESSION['idade'];
?>