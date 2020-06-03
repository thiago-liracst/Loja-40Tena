<?php 

function getPedidos($pdo, $loja){
	$sql = "SELECT *  FROM compra WHERE loja = '$loja'";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPedidosByIds($pdo, $ids) {
	$sql = "SELECT * FROM compra WHERE idcompra IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}