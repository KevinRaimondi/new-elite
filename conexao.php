<?php
	$servidor = "sisjava.mysql.uhserver.com";
	$usuario = "antoniojr0009";
	$senha = "Arucard91745743*";
	$dbname = "sisjava";
	
	//Criar a conexao
	//$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	$conn = new mysqli ($servidor, $usuario, $senha, $dbname);
	if ($conn->connect_error){
		die ("Falha na conexão: ". $conn->connect_error);
	}
?>