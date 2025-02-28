<?php
//proteger input
$nome = htmlspecialchars($_POST['nome']) ;

echo $nome;
?>