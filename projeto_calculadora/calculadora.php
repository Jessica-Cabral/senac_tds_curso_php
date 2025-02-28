<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <!-- enviar dados via form/get -->
    <form action="resultado_calculadora.php" method="get">
        <label for="numero_1">Numero 1</label>
        <input type="text" name="numero_1">
        <label for="numero_2">Numero 2</label>
        <input type="text" name="numero_2">
        <input type="submit" value="Calcular" name="calcular">
    </form>
    
</body>
</html>