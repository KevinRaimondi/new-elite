<?php 
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
		switch($msg){
			case 1:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="/login" class="close" data-dismiss="alert">&times</a>
						Usúario ou Senha invalido.
					</div>
				</div>
			<?php
			break;
			case 2:
			?>
				<div class="message">
					<div class="alert alert-success">
						<a href="/login" class="close" data-dismiss="alert">&times</a>
						Cadastrado com sucesso.
					</div>
				</div>
			<?php
			break;
		}
	}
 ?>
 
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="login.css" type="text/css">
  <link href="css/signin.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-image: url(&quot;../imagens/a (7).png&quot;);">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <a class="navbar-brand" href="/"><b class="text-uppercase gradient-overlay">NEW-ELITE<br></b></a>
      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item text-center">
            <a class="nav-link text-white" href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
          <li class="nav-item" id="p-5 gradient-overlay bg-dark">
            <a class="nav-link" href="/planos"><b class="text-light">PLANOS</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/quem-somos"><b class="text-light">QUEM SOMOS</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login"><b class="text-light my-2">LOGIN | CADASTRE-SE<br></b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 opaque-overlay bg-dark text-dark" style="background-image: url(&quot;../imagens/a (1).png&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="col-md-12">
            <h1 class="text-gray-dark">Já é cadastrado? </h1>
            <p class="lead mb-4"> Então entre com seus dados de login e senha.</p>
            <form class="" method="post" action="valida-login.php">
              <div class="form-group" for="inputUsuario"> <label>Usuário</label>
                <input type="usuario" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Digitar o Usuário" required="" autofocus=""> </div>
              <div class="form-group"> <label>Senha</label>
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Digite a Senha" required=""> </div>
              <button type="submit" class="btn btn-secondary">Acessar</button>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="col-md-12">
            <h1 class="text-gray-dark">Ainda não é cadastrado no site?</h1>
            <p class="lead mb-4"> Faça agora mesmo o seu cadastro, é simples e rápido!</p>
            <form class="" method="post" action="">
              <a href="/cadastro" _black="" class="btn btn-lg mx-1 btn-secondary">FAZER CADASTRO</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 border border-warning bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-8 my-3">
          <h1 class="display-4 text-white text-md-left text-center">Esteja conectado conosco</h1>
        </div>
        <div class="col-md-4  text-center align-self-center">
          <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-fw fa-facebook fa-3x text-white mx-3"></i></a>
          <a href="https://twitter.com/" target="_blank"><i class="fa fa-fw fa-twitter fa-3x text-white mx-3"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-fw fa-instagram fa-3x text-white mx-3"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light bg-dark">New Elite</h2>
          <p class="text-white"> Uma empresa para o que você precisar, controle de estoque e segurança.</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">Mapsite</h2>
          <ul class="list-unstyled">
            <a href="/" class="text-white">Home</a>
            <br>
            <a href="/quem-somos" class="text-white">Sobre nós</a>
            <br>
            <a href="/planos" class="text-white">Planos</a>
            <br>
            <a href="/login" class="text-white">Login</a>
          </ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Contato</h2>
          <p>+55 11 27244706</p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 fa-envelope-o text-light"></i>c</a>ontato@newelite.com </p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-light"></i>7</a>98 Rua Augusta,BR </p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">Inscrever-se</h2>
          <form>
            <fieldset class="form-group text-white"> <label for="exampleInputEmail1">
                        Receba nossa newsletter</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </fieldset>
            <button type="submit" class="btn btn-outline-light">Inscrever-se</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2017 Newelite - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>