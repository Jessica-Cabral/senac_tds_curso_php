<?php
//qual botão foi clicado?

if(isset($_POST['salvar'])){
    echo "Botão Salvar";
}

if(isset($_POST['sair'])){
    echo "Botão Sair";
}

if(isset($_POST['cancelar'])){
    echo "Botão cancelar";
}
?>