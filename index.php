<?php 

	require ("conexao.php");
    session_start(); 

	
	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
		$id = 0;
	}else{
		$id = $_SESSION["id"];
	}	
	
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
		switch($msg){
			case 1:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="/" class="close" data-dismiss="alert">&times</a>
						Você não tem permissão para acessar esta página.
					</div>
				</div>
			<?php
			break;
			case 2:
			?>
				<div class="message">
					<div class="alert alert-success">
						<a href="/" class="close" data-dismiss="alert">&times</a>
						Logout realizado com sucesso.
					</div>
				</div>
			<?php
			break;
			case 3:
			?>
				<div class="message">
					<div class="alert alert-success">
						<a href="/" class="close" data-dismiss="alert">&times</a>
						Conta excluida com sucesso.
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
      <link rel="stylesheet" href="../css/style.css" type="text/css">
	  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="../js/jquery.mask.min.js"></script>
	  <script type="text/javascript" src="../js/mask.js"></script>
      <title> NEW-ELITE | HOME </title>
         <meta name="description" content="O NELITEAPP foi criado para você que quer ter total controle aonde você estiver. com ele você acessa seu aplicativo de uma forma fácil e segura, sem utiliziar computadores e notebooks, você abre seu estoque na palma de sua mão.">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
    <nav class="navbar navbar-expand-md navbar-dark nav-bar-menu">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <a class="navbar-brand" href="/"><b class="text-uppercase gradient-overlay">NEW-ELITE<br></b></a>
      <div class="collapse navbar-collapse mx-auto menu" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" id="p-5 gradient-overlay bg-dark">
            <a class="nav-link" href="/planos"><b class="text-light">PLANOS</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/quem-somos"><b class="text-light">QUEM SOMOS</b></a>
          </li>
		  <?php 
		  
		  	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
				echo '<li class="nav-item">';
				echo '<a class="nav-link" href="/login"><b class="text-light my-2">LOGIN | CADASTRE-SE<br></b></a>';
				echo '</li>';
			}else{
				echo '<li class="nav-item">';
				echo '<a class="nav-link" href="/painel"><b class="text-light my-2">PAINEL<br></b></a>';
				echo '</li>';
				echo '<li class="nav-item">';
				echo '<a class="nav-link" href="../sair.php"><b class="text-light my-2">SAIR<br></b></a>';
				echo '</li>';
			}
			
		  ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center opaque-overlay" style="background-image: url(&quot;imagens/a (1).png&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 text-secondary">
          <h1 class="display-3 mb-4 text-uppercase text-center"><b class="text-danger"><b class="text-secondary">NEW ELITE</b></b>
          </h1>
          <p class="lead mb-5"><b><b class="text-secondary">O Aplicativo de controle de estoque mais sofisticado e fácil do mercado.</b></b>
          </p>
          <a href="/planos" _black="" class="btn btn-lg mx-1 btn-secondary">Planos</a>
          <a href="/quem-somos" class="btn btn-lg mx-1 btn-dark">Que Somos</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-danger py-5" style="background-image: url(&quot;imagens/a (7).png&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light">NELITEAPP</h1>
              <p class="text-light">O NELITEAPP foi criado para você que quer ter total controle aonde você estiver. com ele você acessa seu aplicativo de uma forma fácil e segura, sem utiliziar computadores e notebooks, você abre seu estoque na palma de sua mão.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center text-white bg-danger" style="background-image: url(&quot;imagens/a (7).png&quot;);">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3"> <i class="d-block fa fa-3x fa-android"></i>
          <h2 class="my-3">ANDROID</h2>
          <p>Disponivel em versão igual ou superior a 4.0</p>
        </div>
        <div class="col-md-3 p-4"> <i class="d-block fa fa-3x fa-apple"></i>
          <h2 class="my-3">APPLE</h2>
          <p>Disponivel em IPHONE, IPAD, TABLET E MACBOOKS.</p>
        </div>
        <div class="col-md-3 p-4"> <i class="d-block fa fa-3x fa-chrome"></i>
          <h2 class="my-3">GOOGLE</h2>
          <p> Baixe nossa extensão no google e fique por dentro de todas novidades.</p>
        </div>
        <div class="col-md-3 p-4"> <i class="d-block fa fa-3x fa-desktop"></i>
          <h2 class="my-3"> DESKTOP</h2>
          <p>Já esta disponivel nossa versão teste para Desktop, deixe seu Feedback</p>
        </div>
      </div>
    </div>
  </div>
  <div class="p-5 text-center bg-secondary">
    <a href="https://www.startminer.com/149257" target="_blank"> </a>
    <div class="container">
      <a href="https://www.startminer.com/1492574" target="_blank"> </a>
      <div class="row">
        <a href="https://www.startminer.com/1492574" target="_blank"> </a>
        <div class="col-md-3">
          <a href="https://www.startminer.com/1492574" target="_blank"> </a>
          <div class="card p-5 m-1">
            <div class="card-block">
              <p class="lead"><i><b>teste</b></i></p>
            </div>
            <div class="card-block my-3">
              <h1><b>Grátis</b></h1>
              <p>15 dias</p>
              <hr>
              <p><b>1 Aparelho conectado</b></p>
              <hr>
              <p><b>Suporte de 15 dias</b></p>
              <hr>
              <p><b>Limite de 50 cadastros</b></p>
              <hr>
              <p><b>Armazenamento em nuvem&nbsp;</b></p>
            </div>
			<form class="" method="post" action="../atualizar_plano.php" >
				<input type="hidden" name="id" value="<?php echo $id ?>" />
				<div class="btn-group" >
					<button type="submit" name="acao" value="1" class="btn btn-secondary">TESTE</button>
				</div>
			 </form>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-5 m-1">
            <div class="card-block">
              <p class="lead"><i>Bronze</i></p>
            </div>
            <div class="card-block my-3">
              <p><b>3 Meses</b></p>
              <h1><b>R$400</b></h1>
              <hr>
              <p><b>2 Aparelhos conectados</b></p>
              <hr>
              <p><b>Suporte de 3 Meses&nbsp;</b></p>
              <hr>
              <p><b>Limite de 150 Cadastros</b></p>
              <hr>
              <p><b>Armazenamento em nuvem&nbsp;</b></p>
            </div>
			<form class="" method="post" action="../atualizar_plano.php" >
				<input type="hidden" name="id" value="<?php echo $id ?>" />
				<div class="btn-group" >
					<button type="submit" name="acao" value="2" class="btn btn-secondary">COMPRAR</button>
				</div>
			</form>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-5 m-1 text-dark">
            <div class="card-block">
              <p class="lead"><i><b>Prata</b></i></p>
            </div>
            <div class="card-block my-3">
              <p><b>6 Meses</b></p>
              <h1><b>R$720</b></h1>
              <hr>
              <p><b>5 Aparelhos conectados</b></p>
              <hr>
              <p><b>Suporte de 6 Meses&nbsp;</b></p>
              <hr>
              <p><b>Limite de 450 Cadastros</b></p>
              <hr>
              <p><b>Armazenamento em nuvem&nbsp;</b></p>
            </div>
            <form class="" method="post" action="../atualizar_plano.php" >
				<input type="hidden" name="id" value="<?php echo $id ?>" />
				<div class="btn-group" >
					<button type="submit" name="acao" value="3" class="btn btn-secondary">COMPRAR</button>
				</div>
			</form>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-5 m-1">
            <div class="card-block">
              <p class="lead"><i><b>Ouro</b></i></p>
            </div>
            <div class="card-block my-3">
              <p><b>1 Ano</b></p>
              <h1><b>R$1200</b></h1>
              <hr>
              <p><b>Conexão ilimitada<br><br></b></p>
              <hr>
              <p><b>Suporte de 1 Ano&nbsp;<br><br></b></p>
              <hr>
              <p><b>Cadastros ilimitados</b></p>
              <hr>
              <p><b>Armazenamento em nuvem&nbsp;</b></p>
            </div>
            <form class="" method="post" action="../atualizar_plano.php" >
				<input type="hidden" name="id" value="<?php echo $id ?>" />
				<div class="btn-group" >
					<button type="submit" name="acao" value="4" class="btn btn-secondary">COMPRAR</button>
				</div>
			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5 text-light bg-danger" style="background-image: url(&quot;imagens/a (3).png&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center align-self-center my-5">
          <h1 class="display-1" style="opacity: 0.5;"><b>NELITEAPP</b></h1>
          <p class="lead">Com nosso aplicativo disponivel em Android e IOS, você tem todo controle em suas mãos</p>
          <div class="row mt-5">
            <div class="col-md-5 col-6">
              <a href="https://play.google.com/store?hl=pt_BR" target="_black">
                <img class="center-block img-fluid d-block" src="https://pingendo.github.io/templates/sections/assets/download_android.png"> </a>
            </div>
            <div class="col-md-5 col-6">
              <a href="https://www.apple.com/br/ios/app-store/" target="_black">
                <img class="center-block img-fluid d-block" src="https://pingendo.github.io/templates/sections/assets/download_ios.png"> </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img class="img-fluid d-block mx-auto" src="imagens/a (2).png"> </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.443416963995!2d-46.65575188544265!3d-23.552512984687244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5834f913279b%3A0xb43432b462ddabdc!2sR.+Augusta%2C+798+-+Cerqueira+C%C3%A9sar%2C+S%C3%A3o+Paulo+-+SP%2C+01413-100!5e0!3m2!1spt-BR!2sbr!4v1512000258641"
            width="550" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-6">
          <h1>Contate-Nos</h1>
          <p>Gostaríamos muito de ouvir de você</p>
          <form>
            <div class="form-group"> <label for="InputName">Seu Nome</label>
              <input type="text" class="form-control" id="InputName" placeholder="Seu nome"> </div>
            <div class="form-group"> <label for="InputEmail1">Endereço de e-mail</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Endereço de e-mail"> </div>
            <div class="form-group"> <label for="Textarea">Escreva aqui
                        </label> <textarea class="form-control" id="Textarea" rows="3" placeholder="Escreva aqui"></textarea> </div>
            <button type="submit" class="btn btn-secondary"><b>ENVIAR</b></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <div class="text-light bg-dark">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">New Elite</h2>
          <p class="text-white">O site Completo pra você que busca um aplicativo fácil e seguro de controle de estoque.</p>
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