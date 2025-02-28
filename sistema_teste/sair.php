<?php
//iniciar sessão
session_start();
//destruir sessão
session_destroy();
//eliminar variáveis de sessão
isset($_SESSION['login']);
isset($_SESSION['mostrar_mensagem']);
isset($_SESSION['mensagem']);
//redirecionar index
header('Location: index.php');
?>