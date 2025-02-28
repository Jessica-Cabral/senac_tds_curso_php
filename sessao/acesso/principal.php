<?php
//sessão
session_start();

//validar variável sessao
//isset, verifica se uma variável foi criada e há valor atribuído.
//'!' = negação, nega tudo que vem depois. No caso abaixo, inverte a função do isset.

if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha'])==true)) {
    $_SESSION['mensagem'] = 'Acesso negado!';
    header('Location: index.php');

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h1>Bem-vinda ao Curso PHP</h1>
    <h2>Email: <?php echo $_SESSION['email'];?></h2>
    <br>
    <a href="sair.php">Sair</a>
    
</body>
</html>