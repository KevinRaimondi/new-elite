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

	$dataFormatada     = dateEmMysql(nascimento);

	if($password != $passwordConfirm){
		header('Location: /cadastro/index.php?msg=1"');
	}
	
	if($estado == "select"){
		header('Location: /cadastro/index.php?msg=2"');
	}
			
	$query = mysqli_query ($conn,"INSERT INTO `usuario` (`id`, `login`, `senha`, `email`, `nome`, `sobrenome`, `rg`, `cpf`, `nascimento`, `rua`, `numero`, `cep`, `bairro`, `cidade`, `estado`) VALUES (NULL, '$usuario', '$password', '$email', '$nome', '$sobrenome', '$rg', '$cpf', $dataFormatada, '$rua', '$numero', '$cep', '$bairro', '$cidade', '$estado')");
	
	if ($query){
		header('Location: /login/index.php?msg=2"');
	}else{
		header('Location: /login/index.php?msg=3"');
	}
	
	function dateEmMysql($dateSql){
    $ano= substr($dateSql, 6);
    $mes= substr($dateSql, 3,-5);
    $dia= substr($dateSql, 0,-8);
	$campoFormatado = $ano."-".$mes."-".$dia;
    return campoFormatado;
	
?>
