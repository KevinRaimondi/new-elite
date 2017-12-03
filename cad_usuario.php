<?php 

	require("conexao.php");
	
	session_start();
	session_destroy();
                                       
	$email 			   = $_POST['email'];               
	$usuario		   = $_POST['usuario'];             
	$password		   = $_POST['password'];            
	$passwordConfirm   = $_POST['passwordConfirm'];     
	$nome 			   = $_POST['nome'];                
	$sobrenome		   = $_POST['sobrenome'];           
	$rg				   = $_POST['rg'];                  
	$cpf			   = $_POST['cpf'];                 
														
	$nascimento  	   = $_POST['nascimento'];         
														
	$rua  			   = $_POST['rua'];                 
	$numero  		   = $_POST['numero'];              
	$cep  			   = $_POST['cep'];                 
	$bairro  		   = $_POST['bairro'];              
	$cidade  		   = $_POST['cidade'];              
	$estado  		   = $_POST['estado'];  


	if($password != $passwordConfirm){
		header('Location: /cadastro/index.php?msg=1"');
	}
	
	if($estado == "select"){
		header('Location: /cadastro/index.php?msg=2"');
	}

	$verificarExistenciaLogin = mysqli_query($conn,"SELECT * FROM usuario WHERE login = '$usuario'");
	$row = mysqli_num_rows($verificarExistenciaLogin);
	if ($row > 0){
			
		session_start();
	
		$_SESSION['email'] = $email;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['nome'] = $nome;
		$_SESSION['sobrenome'] = $sobrenome;
		$_SESSION['rg'] = $rg;
		$_SESSION['cpf'] = $cpf;
		$_SESSION['nascimento'] = $nascimento;
		$_SESSION['rua'] = $rua;
		$_SESSION['numero'] = $numero;
		$_SESSION['cep'] = $cep;
		$_SESSION['bairro'] = $bairro;
		$_SESSION['cidade'] = $cidade;
		$_SESSION['estado'] = $estado;
		
		header('Location: /cadastro/index.php?msg=4');
	}else{
		
	$verificarExistenciaEmail = mysqli_query($conn,"SELECT * FROM usuario WHERE email = '$email'");
	$row1 = mysqli_num_rows($verificarExistenciaEmail);
	if ($row1 > 0){
			
		session_start();
	
		$_SESSION['email'] = $email;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['nome'] = $nome;
		$_SESSION['sobrenome'] = $sobrenome;
		$_SESSION['rg'] = $rg;
		$_SESSION['cpf'] = $cpf;
		$_SESSION['nascimento'] = $nascimento;
		$_SESSION['rua'] = $rua;
		$_SESSION['numero'] = $numero;
		$_SESSION['cep'] = $cep;
		$_SESSION['bairro'] = $bairro;
		$_SESSION['cidade'] = $cidade;
		$_SESSION['estado'] = $estado;
		
		header('Location: /cadastro/index.php?msg=5');
		}else{

			$query = mysqli_query ($conn,"INSERT INTO `usuario` (`id`, `login`, `senha`, `email`, `nome`, `sobrenome`, `rg`, `cpf`, `nascimento`, `rua`, `numero`, `cep`, `bairro`, `cidade`, `estado`) VALUES (NULL, '$usuario', '$password', '$email', '$nome', '$sobrenome', '$rg', '$cpf', $nascimento, '$rua', '$numero', '$cep', '$bairro', '$cidade', '$estado')");
	
			if ($query){
				header('Location: /login/index.php?msg=2"');
			}else{
				header('Location: /cadastro/index.php?msg=3"');
			}
		}
	}
	

		
?>