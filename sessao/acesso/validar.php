<?php
//sessão
session_start();

//email e senha
$email = $_POST['email'];
$senha = $_POST['senha'];

//verificar e-mail e senha
if (($email == "teste@teste.com") && ($senha== "789654")){
    #Acesso liberado
    //variáveis de sessao
    $_SESSION['email'] = $email; //Sentando valor
    $_SESSION['senha'] = $senha;
    header('Location: principal.php');
} else{
    #acesso principal
    $_SESSION['mensagem'] = 'Acesso negado!';
    header('Location: index.php');

}
?>

