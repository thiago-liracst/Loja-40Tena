<?php

session_start();

$_SESSION = array();

session_destroy();

//Redireciona o usuário para a página inicial da aplicação
header('Location: index.php');

?>