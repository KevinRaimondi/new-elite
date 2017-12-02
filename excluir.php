<?php 
	require ("conexao.php");
	
		$id = $_POST['id'];
	
		$query = mysqli_query ($conn,"DELETE FROM `usuario` WHERE `usuario`.`id` = $id");
	
		if ($query){
			header('Location: ../sair.php"');
			header('Location: /index.php?msg=3"');
		}else{
			header('Location: /painel/index.php?msg=1"');
		}
?>
