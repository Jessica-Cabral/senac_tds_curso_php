<?php
//funcao boas-vindas (sem parametro e sem retorno)
function boas_vidas(){
    echo "Bem-vinda ao Sistema XPTO!";
}

//mostrar_nome (com paramentro e sem retorno)
function mostrar_nome($nome){
    echo "<br>Seu nome é ".$nome;
}

//funcao data_atual (Com parametro e com retorno)
function data_atual(){
    return date("<br>d/m/Y");
}

//funcao efetuar_login (com parametro e com retorno)
function efetuar_login ($login,$senha){
    if(($login =='maria')&&($senha=='123456')){
        return true;
    }else {
        return false;
    }

}

//somar 2 numeros
function somar ($numero1,$numero2){
    return $numero1+$numero2;
}

//subtrair 2 numeros

// function subtrair ($numero1,$numero2){
//     return $numero1-$numero2;
// }

// //multiplicar 2 numeros

// function multiplicar ($numero1,$numero2){
//     return $numero1*$numero2;
// }

// //multiplicar 2 numeros

// function dividir ($numero1,$numero2){
//     return $numero1/$numero2;
// }


// function calcular ($numero1,$numero2,$operacao){
//     if($operacao == "soma"){
//         echo "O resultado da soma é". $numero1+$numero2;
//     } elseif ($operacao == "subtracao"){
//         echo "O resultado da subracao é ". $numero1-$numero2;
//     } elseif ($operacao == "multiplicacao"){
//         echo "O resultado da multiplicação é ". $numero1*$numero2;
//     } elseif ($operacao == "divisao"){
//         echo "O resultado da divisao é ". $numero1/$numero2;
//     } else
//         echo "Dados inválidos!";
// }

function calculadora($numero1,$numero2,$operacao){
    switch ($operacao){
        case 'somar':
            return $numero1+$numero2;
            break;
        case 'subtrair':
            return $numero1-$numero2;
            break;
        case 'multiplicar':
            return $numero1*$numero2;
            break;
        case 'dividir':
            return $numero1/$numero2;
            break;
        default:
            return "Dados inválidos!";
            break;
    }  
}
?>

