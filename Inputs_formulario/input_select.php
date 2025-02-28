<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidade</title>
</head>
<body>
    <form action="processar_select.php" method="post">
        <label for="cidade">Qual a sua cidade?</label><br>
        <select name="cidade" id="">
            <option name="cidade" value="">Selecione</option>
            <option name="cidade" value="guara">Guara</option>
            <option name="cidade" value="Aguas Claras">Aguas Claras</option>
            <option name="cidade" value="Taguatinga">Taguatinga</option>
            <option name="cidade" value="Samambaia">Samambaia</option>
        </select>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>