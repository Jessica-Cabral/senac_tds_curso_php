<?php
//sessão
session_start();

//destruir a sessão
session_destroy();

header('Location: index.php');

?>