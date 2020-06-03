<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<div class="container-fluid">
			
			<div id="container-imagem">
		
				<img class="logo" src="imagens/logo.png" alt="Logo Mediotec" title="Logo Mediotec" />
			
			</div>
			
			<form name="form-login" id="form-login" method="post"
				action="autentica.php">
				
				<p class="info" align="center">Informe os dados corretamente para entrar no sistema.</p>

				<?php if(isset($_GET['erro'])){ ?>
				<p class="error">Usuário ou senha inválidos</p>
				<?php } ?>

				<div class="form-group">
					<label for="txt_login">Login:</label> <input class="form-control"
						type="text" name="txt_login" id="txt_login" />
				</div>
				
				<div class="form-group">
					<label for="txt_senha">Senha:</label> <input class="form-control"
						type="password" name="txt_senha" id="txt_senha" />
				</div>
				
				<div class="form-group botao-centralizado">
					<button type="submit" class="btn btn-primary">Entrar</button>
					<a href="tela_cadusu.php">Cadastrar-se</a>
				</div>
				
			</form>
			
			<div id="rodape">
			
				<p>Universidade Federal da Paraíba</p>
				
				<p>Projeto desenvolvido pelos alunos do Curso Técnico em Informática do Mediotec</p>
			
			</div>		
		</div>

</body>
</html>