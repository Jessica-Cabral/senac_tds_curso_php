<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>

    <form action="receber_pedido.php" method="post">
        <label for="item">Item</label>
        <label for="item">Quantidade</label> <br>
        <label for="bola_volei">Bola de volei</label>
        <input type="number" name="bola_volei" id=""><br>
        <label for="bola_futebol">Bola de futebol</label>
        <input type="number" name="bola_futebol" id=""><br>
        <label for="bola_handebol">Bola de handebol</label>
        <input type="number" name="bola_handebol" id="">
        <input type="submit" value="Enviar pedido">
    </form>
    
</body>
</html>