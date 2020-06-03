<form name="form-login" id="form-login" method="get" action="homepage.php">
				
	<p class="info" align="center">Escolha qual loja deseja visitar.</p>

	<?php if(isset($_GET['erro'])){ ?>
				
	<p class="error">Houve algum erro</p>
	
	<?php } ?>

	<div class="list-group">
  		<a href="#" class="list-group-item list-group-item-action active">Lojas</a>

  		<a href="index.php?pg=homepage&loja=1" class="list-group-item list-group-item-action">Espetinho</a>
  		<a href="index.php?pg=homepage&loja=2" class="list-group-item list-group-item-action">Quitanda</a>
  		<a href="index.php?pg=homepage&loja=3" class="list-group-item list-group-item-action">Dimas Hortifruti</a>
	</div>
				
</form>