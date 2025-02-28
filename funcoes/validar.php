<?php
//incluir funcao.php
include_once("funcoes.php");
//login
$login = $_POST['login'];
//senha
$senha = $_POST['senha'];
//validar login
if(efetuar_login($login,$senha)==true){
    header("Location: principal.php");
    exit();
}else{
    header("Location: login.php?");
    exit();
}

?>