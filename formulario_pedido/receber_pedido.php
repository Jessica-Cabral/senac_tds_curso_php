<?php
    //itens
    $bola_volei = $_POST['bola_volei'];
    $bola_futebol = $_POST['bola_futebol'];
    $bola_handebol = $_POST['bola_handebol'];

    //soma pedido
    $valor_bola_volei = $bola_volei*25;
    $valor_bola_futebol = $bola_futebol*10;
    $valor_bola_handebol = $bola_handebol*20;
    $valor_pedido = $valor_bola_volei+$valor_bola_futebol+$valor_bola_handebol;
    //mensagem
    echo "Seu pedido foi processado com sucesso.<br>";
    echo $bola_volei." bolas de volei lhe custaram R$ $valor_bola_volei.<br>";
    echo $bola_futebol." bolas de volei lhe custaram R$ $valor_bola_futebol.<br>";
    echo $bola_handebol." bolas de volei lhe custaram R$ $valor_bola_handebol.<br>";
    echo "Sua compra lhe custou R$ $valor_pedido"
 
 
 
    

   
?>