<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flores</title>
</head>
<body>
    <form action="processar_flores.php" method="post">
        <label for="flores">Escolha as flores desejadas:</label><br>
        <input type="checkbox" name="flores[]" value="Rosa">Rosa<br>
        <input type="checkbox" name="flores[]" value="Margarida    ">Margarida<br>
        <input type="checkbox" name="flores[]" value="Violeta">Violeta<br>
        <input type="checkbox" name="flores[]" value="Capuchinha">Capuchinha<br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>