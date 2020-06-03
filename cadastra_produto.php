<?php

include "conectar.php";


//A ação é enviada em um campo hiddendo formulário
$loja = $_POST['loja'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$sql = "INSERT INTO `lojas453_loja`.`produto` (`descricao`, `preco`, `loja`) VALUES ('$descricao', '$preco', '$loja');";
mysqli_query($conexao, $sql);


//Redireciona o usuário para a página inicial da aplicação
header('Location: index.php?pg=homepagedono&loja='.$loja);

?>