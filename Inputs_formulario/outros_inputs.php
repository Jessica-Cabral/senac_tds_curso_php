<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outros inputs</title>
</head>
<body>
    <form action="processar_inputs.php" method="post">
        <label for="email_cliente">Email:</label>
        <input type="email" name="email_cliente" id=""><br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id=""><br>
        <label for="observacao">Observacao</label>
        <textarea name="observacao" rows="3"></textarea><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id=""><br>
        <label for="data">Data</label>
        <input type="date" name="data" id=""><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>