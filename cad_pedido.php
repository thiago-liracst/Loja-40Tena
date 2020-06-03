<?php

include "conectar.php";


//A ação é enviada em um campo hiddendo formulário
$loja = $_GET['loja'];
$pedido = $_GET['pedido'];
$total = $_GET['total'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];

$entrega = $endereco." - ".$complemento." - ".$cidade." | ".$telefone." - ".$email;

$sql = "INSERT INTO `lojas453_loja`.`compra` (`endereco`, `total`, `loja`, `pedido`) VALUES ('$entrega', '$total', '$loja', '$pedido');";
mysqli_query($conexao, $sql);


//Redireciona o usuário para a página inicial da aplicação
header('Location: logout.php');

?>