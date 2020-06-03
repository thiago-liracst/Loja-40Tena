<form name="form-login" id="form-login" method="post" action="autenticar.php">
				
	<p class="info" align="center">Informe os dados corretamente para entrar no sistema.</p>

	<?php if(isset($_GET['erro'])){ ?>
				
	<p class="error">Usuário ou senha inválidos</p>
	
	<?php } ?>

	<div class="form-group">
		<label for="txt_login">Login:</label> 
		<input class="form-control" type="text" name="txt_login" id="txt_login" />
	</div>
				
	<div class="form-group">
		<label for="txt_senha">Senha:</label> 
		<input class="form-control" type="password" name="txt_senha" id="txt_senha" />
	</div>

	<div class="form-group">
		<label for="txt_loja">loja:</label> 
		<input class="form-control" type="text" name="txt_loja" id="txt_loja" />
	</div>
				
	<div class="form-group botao-centralizado">
		<button type="submit" class="btn btn-primary">Entrar</button>
	</div>
				
</form>