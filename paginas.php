<?php

if(isset($_GET['pg']))
	$pagina = $_GET['pg'];

if(isset($_GET['pg']) && $pagina){
	include $pagina . ".php";
}else
	include "lojas.php";
?>