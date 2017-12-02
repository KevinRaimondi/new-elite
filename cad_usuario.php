<?php 

	require("conexao.php");
	
	session_start();
		$_SESSION['email']			 = $_POST['email'];
		$_SESSION['usuario']		 = $_POST['usuario'];
		$_SESSION['password']		 = $_POST['password'];
		$_SESSION['passwordConfirm'] = $_POST['passwordConfirm'];
		$_SESSION['nome'] 			 = $_POST['nome'];
		$_SESSION['sobrenome'] 		 = $_POST['sobrenome'];
		$_SESSION['rg'] 			 = $_POST['rg'];
		$_SESSION['cpf'] 			 = $_POST['cpf'];
		$_SESSION['nascimento'] 	 = $_POST['nascimento'];
		$_SESSION['rua'] 			 = $_POST['rua'];
		$_SESSION['numero'] 		 = $_POST['numero'];
		$_SESSION['cep'] 			 = $_POST['cep'];
		$_SESSION['bairro'] 		 = $_POST['bairro'];
		$_SESSION['cidade'] 		 = $_POST['cidade'];
		$_SESSION['estado'] 		 = $_POST['estado'];
	
		
	if($password != $passwordConfirm){
		header('Location: /cadastro/index.php?msg=1"');
	}
	
	if($estado == "select"){
		header('Location: /cadastro/index.php?msg=2"');
	}
			
	$query = mysqli_query ($conn,"INSERT INTO `usuario` (`id`, `login`, `senha`, `email`, `nome`, `sobrenome`, `rg`, `cpf`, `nascimento`, `rua`, `numero`, `cep`, `bairro`, `cidade`, `estado`) VALUES (NULL, '$_SESSION['usuario']', '$_SESSION['password']', '$_SESSION['email']', '$_SESSION['nome']', '$_SESSION['sobrenome']', '$_SESSION['rg']', '$_SESSION['cpf']', NULL, '$_SESSION['rua']', '$_SESSION['numero']', '$_SESSION['cep']', '$_SESSION['bairro']', '$_SESSION['cidade']', '$_SESSION['estado']')");
	
?>
