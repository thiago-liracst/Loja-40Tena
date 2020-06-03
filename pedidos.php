<?php 
	session_start();
	require_once "functions/pedidos.php";

	$pdoConnection = require_once "connection.php";

    $loja = $_GET['loja'];
	$resultsPedidos = getPedidos($pdoConnection, $loja);
?>
<form name="form-login" id="form-login" action="index.php?pg=carrinho&acao=up&loja=<?php echo $_GET['loja'] ?>" method="post">
		<?php if($resultsPedidos) : ?>
			<form action="carrinho.php?acao=up" method="post">
                <?php foreach($resultsPedidos as $result) : ?>
                        
                    <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>Pedido</th>
                                <th>Total</th>
                            </tr>				
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $result['pedido']?></td>
                                <td>R$<?php echo number_format($result['total'], 2, ',', '.')?></td>
                                <td></td>
                            </tr>
                            
                    </table> 
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Endereco</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly=“true”><?php echo $result['endereco']?></textarea> 
                        </div> 
                            
                        <div align="center">
                            <a href="entregue.php?id=<?php echo $result['idcompra']?>&loja=<?php echo $loja?>" class="btn btn-danger">Entregue</a>
                        </div>
                        <?php endforeach;?>
                    </tbody>  
			</form>
	<?php endif?>
</form>