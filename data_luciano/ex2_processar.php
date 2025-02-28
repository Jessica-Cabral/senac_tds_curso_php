<?php 
$peso_pessoa1 = $_POST['peso_pessoa1'];
$peso_pessoa2 = $_POST['peso_pessoa2'];

if ($peso_pessoa1 > $peso_pessoa2) {
    echo "A pessoa mais pesada é a pessoa 1.";
} else {
    echo "A pessoa mais pesada é a pessoa 2.";
}

?>