<?php 

//Dados do banco de dados
define("DB_HOST", "localhost");
define("DB_NAME", "lojas453_loja");
define("DB_USER", "lojas453_loja");
define("DB_PASS", "cK5yc+i+(F%g");

//Conexao com Banco de Dados
return new PDO(sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME), DB_USER, DB_PASS);
