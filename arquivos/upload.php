<?php

//pasta onde o arquivo será salvo
$local = "files/";

//pegar o arquivo

$file = $_FILES['arquivo'];

//propriedades do arquivo
$nome_arquivo = $_FILES['arquivo']['name'];
$tipo_arquivo = $_FILES['arquivo']['type'];
$size_arquivo = $_FILES['arquivo']['size']; //size = tamanho
$tmp = $_FILES['arquivo']['tmp_name']; //temp = arquivo temporario

//mova para a pasta files
// move_uploaded_file($file['tmp_name'], $local.$nome_arquivo);
// move_uploaded_file($file['tmp_name'], $local."meu_arquivo.pdf");//caso queira renomear

//mover para pasta files com mensagem
if(move_uploaded_file($file['tmp_name'], $local.$nome_arquivo)){
    echo "Arquivo enviado com sucesso!";
} else {
    echo "Erro ao enviar arquivo.";
}

?>