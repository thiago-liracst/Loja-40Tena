<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Lojas 40Tena</title>
		<link rel="shortcut icon" href="imagens/favicon.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="js/libs/jquery-3.3.1.min.js"></script>
		<script src="js/libs/bootstrap.min.js"></script>
		<script src="js/libs/jquery.validate.js"></script>
		<script src="js/views/index.js"></script>
	<title></title>
</head>
<body>

<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
  	<a class="nav-link active" onclick='history.go(-1)'>Voltar</a>
  </li>
  <li class="nav-item">
  	<a class="nav-link" href="index.php?pg=lojas">Início</a>
  </li>
  <li class="nav-item">
  	<a class="nav-link active" href="index.php?pg=login">Sou dono</a>
  </li>
  <li class="nav-item">
  	<a class="nav-link" href="logout.php">Sair</a>
  </li>
</ul>
	
	
		<div id="container-imagem">
		
				<img class="logo" src="imagens/logo.png" alt="Logo" title="Logo"/>
			
		</div>
				<div>
				
					<?php include "paginas.php";?>
				
				</div>
		<div id="rodape">
			
				<p>Lojas 40Tena</p>
				
				<p>Desenvolvido por Thiago Lira</p>
			
		</div>		
	</div>
</body>
</html>