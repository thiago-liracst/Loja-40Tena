<?php
include "conectar.php";


//A ação é enviada em um campo hiddendo formulário
$loja = $_GET['loja'];
$idcompra = $_GET['id'];

$sql = "DELETE FROM `lojas453_loja`.`compra` WHERE `idcompra`='$idcompra';";
mysqli_query($conexao, $sql);


//Redireciona o usuário para a página inicial da aplicação
header('Location: index.php?pg=pedidos&loja='.$loja);
?>