<?php
//criar um autoload
function carregar_classes($classeName){
    $filename = "classes/".$classeName.".class.php";
    //verificar se existe e é legível
    if(is_readable($filename)){
        require $filename;
    }
}

//registrar as classes
spl_autoload_register("carregar_classes")
?>  