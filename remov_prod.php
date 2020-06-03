<?php

include "conectar.php";


//A ação é enviada em um campo hiddendo formulário
$id = $_GET['id'];
$loja = $_GET['loja'];

$sql = "DELETE FROM `lojas453_loja`.`produto` WHERE `idproduto`='$id';";
mysqli_query($conexao, $sql);


//Redireciona o usuário para a página inicial da aplicação
header('Location: index.php?pg=homepagedono&loja='.$loja);

?>