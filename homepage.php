<?php

	$loja = $_GET['loja'];
	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection, $loja);
?>	

<form name="form-login" id="form-login" method="post">

	<table class="table table-striped table-hover", align="center">
		<tbody >
			<tr >
				<?php foreach($products as $product) : ?>
					<tr  align="center">
							<td>
								<div align="center">
									<div class="card-body">
									<h5 class="card-title"><?php echo $product['descricao']; ?></h5>
									<p class="card-text">R$<?php echo number_format($product['preco'], 2, ',', '.')?></p>
									<a href="index.php?pg=carrinho&loja=<?php echo $loja ?>&acao=add&id=<?php echo $product['idproduto']?>" class="btn btn-primary">Comprar</a>
								</div>
							</td>
					</tr>
				<?php endforeach;?>
			</tr>	
		</tbody>
	</table>

	<div align="center">
		<a href="index.php?pg=carrinho&loja=<?php echo $loja ?>&acao=up" class="btn btn-primary">Carrinho</a>
	</div>	
</form>