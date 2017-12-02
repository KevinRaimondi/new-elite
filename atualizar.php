<?php 
	require ("conexao.php");
	
		$id 	= $_POST['id'];
		$acao	= $_POST['acao'];
		
		$rua  		= $_POST['rua'];                 
		$numero 	= $_POST['numero'];              
		$cep  		= $_POST['cep'];                 
		$bairro  	= $_POST['bairro'];              
		$cidade  	= $_POST['cidade'];              
		$estado  	= $_POST['estado'];              

	
		if($acao == "alterar"){
			$query = mysqli_query ($conn,"UPDATE `usuario` SET `rua` = '$rua', `numero` = '$numero', `cep` = '$cep', `bairro` = '$bairro', `cidade` = '$cidade', `estado` = '$estado' WHERE `usuario`.`id` = $id");
	
			if ($query){
				header('Location: /painel/index.php?msg=2"');
			}else{
				header('Location: /painel/index.php?msg=3"');
			}
		}	
		
		if($acao == "excluir"){
			$query = mysqli_query ($conn,"DELETE FROM `usuario` WHERE `usuario`.`id` = $id");
	
			if ($query){
				session_start();
				session_destroy();
				header('Location: /index.php?msg=3"');
			}else{
				header('Location: /painel/index.php?msg=1"');
			}
		}
		
		if($acao == "sair"){
			header('Location: /sair.php"');
		}
		
?>
