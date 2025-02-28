<?php
//vetor capturar opcoes selecionadas
$flores = $_POST['flores'];

//mostrar flores selecionadas
foreach ($flores as $flores_selecionadas) {
    echo "<br>Flor selecionada: ".$flores_selecionadas;
}
?>