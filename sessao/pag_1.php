<?php
//criar sessao
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <form action="pag_2.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>