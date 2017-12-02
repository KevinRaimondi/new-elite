<?php 

	this=> $email 				= $_POST["email"];
	this=> $usuario				= $_POST["usuario"];
	this=> $password			= $_POST["password"];
	this=> $passwordConfirm		= $_POST["passwordConfirm"];
	this=> $nome 				= $_POST["nome"];
	this=> $sobrenome			= $_POST["sobrenome"];
	this=> $rg					= $_POST["rg"];
	this=> $cpf					= $_POST["cpf"];
	
	this=> $nascimento  		= $_POST["nascimento"];
	this=> $rua  				= $_POST["rua"];
	this=> $numero  			= $_POST["numero"];
	this=> $cep  				= $_POST["cep"];
	this=> $bairro  			= $_POST["bairro"];
	this=> $cidade  			= $_POST["cidade"];
	this=> $estado  			= $_POST["estado"];
	
		
	if(password != passwordConfirm){
		header('Location: /cadastro/index.php?msg=1"');
	}
	
	if(estado == "select"){
		header('Location: /cadastro/index.php?msg=2"');
	}
	
	require("conexao.php");
		
	$query = mysqli_query ($conn,"INSERT INTO `usuario` (`id`, `login`, `senha`, `email`, `nome`, `sobrenome`, `rg`, `cpf`, `nascimento`, `rua`, `numero`, `cep`, `bairro`, `cidade`, `estado`) VALUES (NULL, '$usuario', '$password', '$email', '$nome', '$sobrenome', '$rg', '$cpf', NULL, '$rua', '$numero', '$cep', '$bairro', '$cidade', '$estado')");
	
?>
