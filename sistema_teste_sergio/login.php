<?php
session_start();
//incluir a classe LoginClass
include_once "LoginClass.php";
//criar objeto/instancia
$acessar = new LoginClass();
//invocar o metodo efetuarLogin
$acessar->efetuarLogin($_POST['login'], $_POST['senha']);
