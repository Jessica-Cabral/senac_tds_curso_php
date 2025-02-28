<?php

$nome = "Maria Jesus Cruz";
$cpf = "789.654.123-10";
$cnpj = "31.330.705/0001-09";
$identificador = $cnpj;

//tamanho da string
echo "O tamanho de $nome é: ".strlen($nome);
if (strlen($identificador)==14) {
    echo "<br>É CPF";
}elseif (strlen($identificador)==18) {
    echo "<br>É CNPJ";
}else {
    echo "<br>Nem nem";
}

//substituir string
echo "<br>". $nome_nome = str_replace("Maria","Marta",$nome);

//parte da string - retorna uma parte da string
echo "<br>".  $parte = substr($nome,6,3);

//maisculo e minusculo
echo "<br>".  strtolower($nome);
echo "<br>".  strtoupper($nome);

//remover espaco antes ou depois
echo "<br>".  trim($nome);

// md5 é um hash.  é um protocolo criptográfico usado para autenticar mensagens
//  Ele é baseado em uma função de hash que verifica se um arquivo enviado corresponde ao recebido pela pessoa para quem ele foi enviado.

echo "<br>".  $senha = md5($nome);
echo "<br>".  $senha = md5($nome_nome);

//comparando md5
if(md5($nome)=="7a6c89c85bff9179f9d733cc1e9ca0ee"){
    echo "<br>".  "A senha está correta!";
}

//tranformar CPF e CNPJ em somente números
echo "<br>". $cpf_sem_digito = str_replace([".","-"],"",$cpf);

echo "<br>". $cnpj_sem_digito = str_replace(".","",$cnpj);
echo "<br>". $cnpj_sem_digito = str_replace("/","",$cnpj_sem_digito);
echo "<br>". $cnpj_sem_digito = str_replace("-","",$cnpj_sem_digito);



?>