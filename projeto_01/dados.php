<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <!-- enviar dados via form/get -->
    <form action="receber_dados.php" method="get">
        <label for="nome_pessoa">Nome</label>
        <input type="text" name="nome_pessoa">
        <label for="email_pessoa">Email</label>
        <input type="email" name="email_pessoa">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    
    <!-- enviar dados via form/get (informação é atualizada via banco, mas no exemplo foi preenchida manualmente)-->
     <a href="http://localhost:8081/curso_php/projeto_01/receber_dados.php?nome_pessoa=Caroline&email_pessoa=teste%40gmail.com">Enviar</a>
</body>
</html>