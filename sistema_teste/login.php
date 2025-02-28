<?php
//iniciar sessão]
session_start();
//incluir a classe LoginClass
include_once "LoginClass.php";
//criar objeto/instância
$acessar = new LoginClass();
//invocar o método efetuar_login
$acessar->efetuarLogin($_POST['login'],$_POST['senha']);

?>