<?php 
	require ("conexao.php");
	session_start();
	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
		header ("Location: /login/index.php");
	}else{
	
	$id = $_POST['id'];
	$idplano = $_POST['plano'];
	
	$plano = "";
	
		switch($idplano){
			case 1:
			$plano = "Teste - Gratis";
			break;
			case 2:
			$plano = "Bronze";
			break;
			case 3:
			$plano = "Prata";
			break;
			case 4:
			$plano = "Ouro";
			break;
		}

	$query = mysqli_query ($conn,"UPDATE `usuario` SET `plano` = '$plano' WHERE `usuario`.`id` = $id");
	
	if ($query){
		header('Location: /painel/index.php?msg=4"');
	}else{
		header('Location: /painel/index.php?msg=5"');
	}
}
	
?>
