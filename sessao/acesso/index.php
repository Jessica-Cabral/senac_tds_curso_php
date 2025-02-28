<?php
//sessão
session_start();

//verificar se tem mensagem
if(isset($_SESSION['mensagem']) == true) {
    echo $_SESSION['mensagem'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="validar.php" method="post">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="" required >
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="" required>
        <br><br>
        <input type="submit" value="Acessar">
    </form>
    
</body>
</html>
