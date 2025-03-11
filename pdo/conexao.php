<?php
//conexao com Mysql
$conexao = new PDO("mysql:host=localhost;dbname=db_sgb","root","");
//verificar variavel de conexão 
var_dump($conexao);
?>