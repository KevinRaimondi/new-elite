<?php 
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
    <meta name="description" content="Página de  dashboard">
    <meta name="author" content="Antonio Ferreira De Oliveira Juniornior">
    <link rel="icon" href="imagem/favicon.ico"> 
	<title>New Elite Info - Cadastra Usúario </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="admin/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
	<?php
		include_once("menu_admin.php")
	?>
	<div class="container theme-showcase" role="main">
			<div class="page-header">
			<h1>Cadastrar Usúario</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="processa/proc_cad_usuario.php" class="form-horizontal" method="POST">
					  <div class="form-group">
						<label for="inputNome" class="col-sm-2 control-label">Nome</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputNome" placeholder="Nome Completo">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputCpf" class="col-sm-2 control-label">CPF</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputCpf" placeholder="CPF">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputRg" class="col-sm-2 control-label">RG</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputRg" placeholder="RG">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputTelefone" class="col-sm-2 control-label">Telefone</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputTelefone" placeholder="Telefone">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputCelular" class="col-sm-2 control-label">Celular</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputCelular" placeholder="Celular">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputEmail" placeholder="E-mail">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputLogin" class="col-sm-2 control-label">Login</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputLogin" placeholder="Login">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Senha</label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputCodFun" class="col-sm-2 control-label">Codigo do Funcionario</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputCodFun" placeholder="Codigo do Funcionario">
						</div>
					  </div>
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-success">Cadastrar</button>
						</div>
					  </div>
					</form>
				</div>
			</div>
		</div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>