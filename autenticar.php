<?php

include "conectar.php";

/*
 * Uma opção aqui é aplicar uma função de escape para caracteres especiais
 * $login = mysqli_real_escape_string($conexao, $_POST['txt_login']);
 * $senha = mysqli_real_escape_string($conexao, $_POST['txt_senha']);
 */
$login = $_POST['txt_login'];
$senha = $_POST['txt_senha'];
$loja = $_POST['txt_loja'];

if(!$login || !$senha || !$loja){
	//Redireciona o usuário de volta para a tela de login
	header('Location: index.php?erro=1');
}

$sql = "SELECT * FROM loja WHERE dono = '$login' AND senha = '$senha' AND id = '$loja';";
$result = mysqli_query($conexao, $sql);

//Testa se encontrou o usuário
if(mysqli_num_rows($result) > 0){

	//Redireciona o usuário para a página inicial da aplicação
	header('Location: index.php?pg=homepagedono&loja='.$loja);	

}else{

	//Redireciona o usuário de volta para a tela de login
	header('Location: index.php?erro=1');

}

?>