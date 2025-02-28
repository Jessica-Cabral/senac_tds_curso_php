<?php
    // Altura 
    $altura = $_POST['altura'];

    // Sexo
    $sexo = $_POST['sexo'];

    //Verificação sexo
    if($sexo == 'M'){
        $peso = (72.7 * $altura) - 58;
    }else{
        $peso = (61.1 * $altura) - 44.7;
    }
    print "O peso ideal para a altura {$altura} é: ".$peso;
?>