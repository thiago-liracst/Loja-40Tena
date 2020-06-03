<?php
	$loja = $_GET['loja'];
	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection, $loja);
?>	

<form name="form-login" id="form-login" method="post">
	<div align="center">
		<a href="index.php?pg=tela_cadprod&loja=<?php echo $loja; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Adicionar Produto</a>
		<a href="index.php?pg=pedidos&loja=<?php echo $loja?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Pedidos</a>
	</div>
	

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
									<a href="remov_prod.php?id=<?php echo $product['idproduto']?>&loja=<?php echo $loja?>" class="btn btn-danger">Remover</a>
								</div>
							</td>
					</tr>
				<?php endforeach;?>
			</tr>	
		</tbody>
	</table>		
</form>