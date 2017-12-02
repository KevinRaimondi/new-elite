<?php
	$servidor = "mysql.hostinger.com.br";
	$usuario = "u163043632_admin";
	$senha = "elite123";
	$dbname = "u163043632_elite";
	
	//Criar a conexao
	//$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	$conn = new mysqli ($servidor, $usuario, $senha, $dbname);
	if ($conn->connect_error){
		die ("Falha na conexão: ". $conn->connect_error);
	}
?>