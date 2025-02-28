<?php
//criar sessao
session_start();
//variável de sessão
$_SESSION['nome'] = $_POST['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <form action="pag_3.php" method="post">
        <label for="idade">Idade</label>
        <input type="text" name="idade" id="">
        <input type="submit" value="Enviar">
        <!--  gambiarra<input type="hidden" name="nome" value="<?php echo $nome?>"> -->

    </form>
    
</body>
</html>