<?php 
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
		switch($msg){
			case 1:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="index.php" class="close" data-dismiss="alert">&times</a>
						Usúario ou Senha errados tente outra vez.
					</div>
				</div>
			<?php
			break;
			case 2:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="index.php" class="close" data-dismiss="alert">&times</a>
						Você não tem permissão para acessar esta página.
					</div>
				</div>
			<?php
			break;
			case 3:
			?>
				<div class="message">
					<div class="alert alert-success">
						<a href="index.php" class="close" data-dismiss="alert">&times</a>
						Logout realizado com sucesso.
					</div>
				</div>
			<?php
			break;
		}
	}
 ?>
 
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Antonio Ferreira De Oliveira Juniornior">
    <link rel="icon" href="imagem/favicon.ico">

    <title>New Elite Info - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
	<div class="container">		
      <form action="valida.php" method="POST" class="form-signin">
        <h2 class="form-signin-heading text-center">Área restrita a funcionarios</h2>
        <label for="inputUsuario" class="sr-only">Usuário</label>
        <input type="usuario" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Digitar o Usuário" required autofocus></br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Digite a Senha" required >
        <div class ="checkbox">
			<label><input type="checkbox"value="esqueci">Esqueci a senha</label>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>
		<p class="text-center text-danger">
		</p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>