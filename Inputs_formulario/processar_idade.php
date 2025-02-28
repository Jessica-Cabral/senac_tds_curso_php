<?php
//nome
$nome = $_POST['nome'];
//idade
$idade = $_POST['idade'];

//testar idade
if ($idade >=18) {
    echo $nome." e maior de idade";
}else{
    echo $nome." e menor de idade";
}

//testar faixa etaria
if ($idade >=0 and $idade <=12) {
    echo " e apenas uma crianca!";
} elseif ($idade > 12 and $idade <=17) {
    echo " e um adolescente!";
} elseif ($idade > 17 and $idade <=30) {
    echo " voce e jovem ainda, jovem ainda";
} else {
    print "E hora de dar tchau";
}
?>