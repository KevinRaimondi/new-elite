<?php 

	require("conexao.php");


	
	session_start();
	
	$email 			  = 	$_SESSION['email']			 = $_POST['email'];                 
	$usuario		  = 	$_SESSION['usuario']		 = $_POST['usuario'];               
	$password		  = 	$_SESSION['password']		 = $_POST['password'];              
	$passwordConfirm  = 	$_SESSION['passwordConfirm'] = $_POST['passwordConfirm'];       
	$nome 			  = 	$_SESSION['nome'] 			 = $_POST['nome'];                  
	$sobrenome		  = 	$_SESSION['sobrenome'] 		 = $_POST['sobrenome'];             
	$rg				  = 	$_SESSION['rg'] 			 = $_POST['rg'];                    
	$cpf			  = 	$_SESSION['cpf'] 			 = $_POST['cpf'];                   
					  =    	                                                                
	$nascimento  	  = 	$_SESSION['nascimento'] 	 = $_POST['nascimento'];            
					  =    	                                                                
	$rua  			  = 	$_SESSION['rua'] 			 = $_POST['rua'];                   
	$numero  		  = 	$_SESSION['numero'] 		 = $_POST['numero'];                
	$cep  			  = 	$_SESSION['cep'] 			 = $_POST['cep'];                   
	$bairro  		  = 	$_SESSION['bairro'] 		 = $_POST['bairro'];                
	$cidade  		  = 	$_SESSION['cidade'] 		 = $_POST['cidade'];                
	$estado  		  = 	$_SESSION['estado'] 		 = $_POST['estado'];                

	
		
	if($password != $passwordConfirm){
		header('Location: /cadastro/index.php?msg=1"');
	}
	
	if($estado == "select"){
		header('Location: /cadastro/index.php?msg=2"');
	}
			
	$query = mysqli_query ($conn,"INSERT INTO `usuario` (`id`, `login`, `senha`, `email`, `nome`, `sobrenome`, `rg`, `cpf`, `nascimento`, `rua`, `numero`, `cep`, `bairro`, `cidade`, `estado`) VALUES (NULL, '$usuario', '$password', '$email', '$nome', '$sobrenome', '$rg', '$cpf', NULL, '$rua', '$numero', '$cep', '$bairro', '$cidade', '$estado')");
	
?>
