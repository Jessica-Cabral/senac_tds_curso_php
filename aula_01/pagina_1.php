<?php
    // comentário de uma linha
    # comentário de uma linha
    /*
        comentário de várias linhas
    */

    // Importante escolher um e seguir como padrão.

    //constante
    define("NOME_SISTEMA","Sistema de Gerenciamento do Senac");

    //rescrevendo a constante
    print NOME_SISTEMA;
    print "<h1>Teste</h1>";

    //variáveis em PHP - sempre começa com $
    print $nome = "Caroline<br>";
    print $sobrenome = "Pires<br>";
    print $idade = 35;

    //diferença entre " e '
    $mundo = "mundo";
    echo "<br> Olá, $mundo";
    echo '<br> Olá, $mundo"';

    //concatenar - a instrução para concatenar é o "."
    echo '<br> Olá, '.$mundo. '. Seja bem-vindo!';
?>