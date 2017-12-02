<?php 

	require("conexao.php");
                                       
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
			
	$query = mysqli_query ($conn,"UPDATE `usuario` SET `login` = '$usuario', `senha` = '$password', `email` = '$email', `nome` = '$nome', `sobrenome` = '$sobrenome', `rg` = '$rg', `cpf` = '$cpf', `rua` = '$rua', `numero` = '$numero', `cep` = '$cep', `bairro` = '$bairro', `cidade` = '$cidade', `estado` = '$estado' WHERE `usuario`.`id` = 1");
	
	if ($query){
		header('Location: /login/index.php?msg=2"');
	}else{
		header('Location: /login/index.php?msg=3"');
	}
	
?>
