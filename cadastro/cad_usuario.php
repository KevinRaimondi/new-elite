<?php 
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
		switch($msg){
			case 1:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="/cadastro" class="close" data-dismiss="alert">&times</a>
						Senhas não combinam.
					</div>
				</div>
			<?php
			break;
			case 2:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="/cadastro" class="close" data-dismiss="alert">&times</a>
						Favor selecionar um estado.
					</div>
				</div>
			<?php
			break;
		}
	}

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
	
	require_once("../conexao.php");
		
	$query = mysqli_query ($conn,"INSERT INTO `usuario` (`id`, `login`, `senha`, `email`, `nome`, `sobrenome`, `rg`, `cpf`, `nascimento`, `rua`, `numero`, `cep`, `bairro`, `cidade`, `estado`) VALUES (NULL, '$usuario', '$password', '$email', '$nome', '$sobrenome', '$rg', '$cpf', NULL, '$rua', '$numero', '$cep', '$bairro', '$cidade', '$estado')");
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
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com Sucesso.\");
				</script>
			";		   
		}
		else{ 	
				echo "
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com Sucesso.\");
				</script>
			";		   
		}
	?> 
	</body>
</html>