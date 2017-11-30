<?php
	require ("conexao.php");
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header ("Location: index.php?msg=2");
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Listar Usuarios Cadastrados">
		<meta name="author" content="Antonio Ferreira De Oliveira Juniornior">
		<link rel="icon" href="imagem/favicon.ico"> 
	
		<title>New Elite Info - Listar Usuarios</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="admin/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
	</head>
	
	<body role="document">
		<?php
			include_once("menu_admin.php");
			$query = mysqli_query($conn,"SELECT * FROM usuario ORDER BY 'cod_usu'");
			$linhas = mysqli_num_rows($query);
		?>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
			<h1>Lista de Usúarios</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>CODIGO</th>
								<th>NOME</th>
								<th>CPF</th>
								<!--<th>RG</th>-->
								<!--<th>TELEFONE</th>-->
								<!--<th>CELULAR</th>-->
								<th>LOGIN</th>
								<th>EMAIL</th>
								<th>ACÕES</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($linhas = mysqli_fetch_array($query)){
									echo"<tr>";
									echo"<td>".$linhas['cod_usu']."</td>";
									echo"<td>".$linhas['nome_usu']."</td>";
									echo"<td>".$linhas['cpf_usu']."</td>";
									//echo"<td>".$linhas['rg_usu']."</td>";
									//echo"<td>".$linhas['telefone_usu']."</td>";
									//echo"<td>".$linhas['celular_usu']."</td>";
									echo"<td>".$linhas['login_usu']."</td>";
									echo"<td>".$linhas['email_usu']."</td>";
									echo"<td>Visualizar - Editar - Apagar</td>";
									echo"</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div> <!-- /container -->
	</body>
