<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>

<body>
    <?php 
    echo date('d/m/Y');
    echo "<br>";
    echo time();
    echo 'Hoje é '. date("d/m/Y");
    echo "<br>";
    echo 'Daqui a um mês é '. date("d/m/Y", strtotime("+1 month"));
    ?>
</body>

</html>