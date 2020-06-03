<?php

$conexao = mysqli_connect("localhost", "lojas453_loja", "cK5yc+i+(F%g") or die ("Não foi possível se conectar ao banco de dados");
$db = mysqli_select_db($conexao, 'lojas453_loja') or die ("Não foi possível selecionar a base de dados");

?>