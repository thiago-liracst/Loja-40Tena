<?php
    session_start();
    if(isset($_SESSION['user']))
        {
            $user = $_SESSION['user'];
            echo "$user";
        }
    else
        {
        }
	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);			
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		} 
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);

	$pedido = "";
	foreach ($resultsCarts as $result) {
		$pedido = $pedido.$result['quantity']." - ".$result['name']." | ";
	}
	$pedido = substr($pedido, 0, strlen($pedido)-3);
	//echo $pedido;
?>
<form name="form-login" id="form-login" action="index.php?pg=carrinho&acao=up&loja=<?php echo $_GET['loja'] ?>" method="post">
		<?php if($resultsCarts) : ?>
			<form action="carrinho.php?acao=up" method="post">
			<table class="table table-strip">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Subtotal</th>
						<th>Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
						<td>
							<input class="form-control" type="text" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantity']?>" size="1" />							
						</td>
						<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						<td><a href="index.php?pg=carrinho&acao=del&id=<?php echo $result['id']?>" class="btn btn-danger">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>

					 <td><a href="index.php?pg=finalizar&loja=<?php echo $_GET['loja']?>&pedido=<?php echo $pedido?>&total=<?php echo number_format($totalCarts, 2, ',', '.')?>" class="btn btn-primary">Finalizar</a></td>
				 </tr>
				</tbody>
				
			</table>
			<div align="center">
				<a class="btn btn-primary" href="index.php?pg=homepage&loja=<?php echo $_GET['loja'] ?>">Continuar Comprando</a>
				<button href="index.php?pg=carrinho&acao=up" class="btn btn-primary" type="submit">Atualizar Carrinho</button>
			</div>
			</form>
	<?php endif?>
</form>