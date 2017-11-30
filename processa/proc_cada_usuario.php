<?php 
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header ("Location: index.php?msg=2");
	}
	require_once("../conexao.php");
	
	$inputNome 			= $_POST["inputNome"];
	$inputCpf			= $_POST["inputCpf"];
	$inputRg			= $_POST["inputRg"];
	$inputTelefone		= $_POST["inputTelefone"];
	$inputCelular 		= $_POST["inputCelular"];
	$inputEmail			= $_POST["inputEmail"];
	$inputLogin			= $_POST["inputLogin"];
	$inputPassword		= $_POST["inputPassword"];
	$inputCodFun  		= $_POST["inputCodFun"];
	$query = mysqli_query ($conn,"INSERT INTO usuario(nome_usu,cpf_usu,rg_usu,telefone_usu,celular_usu,email_usu,login_usu,senha_usu,cod_fun) VALUES ('$inputNome','$inputCpf','$inputRg','$inputTelefone','$inputCelular','$inputEmail','$inputLogin','$inputPassword','$inputCodFun')");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	</head>
	<body>
	<?php
		if (mysqli_affected_rows() != 0 )
		{	
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/projeto/admin/listar_usuario.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com Sucesso.\");
				</script>
			";		   
		}
		else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:81/projeto/admin/cad_usuario.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com Sucesso.\");
				</script>
			";		   
		}
	?> 
	</body>
</html>