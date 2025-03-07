<?php
//incluir as classes
include_once "CachorroClass.php";
include_once "GatoClass.php";

//criar uma intância da Cachorro
$objCachorro = new CachorroClass("Mine");
echo "<br> O ".$objCachorro->getNome()." é um cachorro e ".$objCachorro->fazer_som();
$objCachorro-> informar_idade(8);
echo $objCachorro-> mostrar_idade();
$objCachorro-> descrever_animal();

//criar uma intância da Gato
$objGato = new GatoClass("Nike");
echo "<br> O ".$objGato->getNome()." é um gato e ".$objGato->fazer_som();
$objGato-> informar_peso(7.4);
echo $objGato-> mostrar_peso();
$objGato-> descrever_animal();
?>
