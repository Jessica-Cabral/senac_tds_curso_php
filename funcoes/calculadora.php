<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <label for="numero1">Informe o número 1</label>
        <input type="number" name="numero1" id="">
        <label for="numero2">Informe o número 2</label>
        <input type="number" name="numero2" id=""> <br>
        <label for="operacao">Escolha a operação desejada</label>
        <select name="operacao" id="">
            <option name="operacao" value="">Selecione</option>
            <option name="operacao" value="soma">Soma</option>
            <option name="operacao" value="subtracao">Subtracao</option>
            <option name="operacao" value="multiplicacao">Multiplicação</option>
            <option name="operacao" value="divisao">Divisao</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>