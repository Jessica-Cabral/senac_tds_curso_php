<?php
    //nome
    $nome = $_POST['nome'];
    //sobrenome
    $sobrenome = $_POST['sobrenome'];

    //nome completo
    echo "Seu nome completo e {$nome} {$sobrenome}";
    echo "Seu nome completo e $nome $sobrenome";
    echo 'Seu nome completo e '.$nome.' '.$sobrenome;
?>