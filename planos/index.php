<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/style.css" type="text/css">

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
		  <?php 
		  
		  	require ("../conexao.php");
			session_start();
		  
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
  <div class="py-5 text-dark" style="background-image: url(&quot;../imagens/a (1).jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p class="lead text-dark"><b><b>Tudo em instantes, no conforto de sua casa, estãmos sempre a prontidao para qualquer emprevisto que você possa ter.</b>
            <br> </b>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br> </p>
          <p class="lead m-0">
            <br> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="p-5 text-center bg-secondary" style="background-image: url(&quot;../imagens/a (7).png&quot;);">
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
              <p><b>Suporte de 1 mês</b></p>
              <hr>
              <p><b>Limite de 50 cadastros</b></p>
              <hr>
              <p><b>Armazenamento em nuvem&nbsp;</b></p>
            </div>
            <div class="card-block">
              <a href="https://www.startminer.com/1492574" target="_blank"> </a>
              <a href="/login" class="btn btn-info"><b>TESTAR</b></a>
            </div>
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
            <div class="card-block">
              <a href="imagens/em_construcao1.jpg" class="btn btn-info"><b>COMPRAR</b></a>
            </div>
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
            <div class="card-block">
              <a href="imagens/em_construcao1.jpg" class="btn btn-info"><b>COMPRAR</b></a>
            </div>
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
              <p><b>Conexão ilimitada</b></p>
              <hr>
              <p><b>Suporte de 1 Ano&nbsp;</b></p>
              <hr>
              <p><b>Cadastros ilimitados</b></p>
              <hr>
              <p><b>Armazenamento em nuvem&nbsp;</b></p>
            </div>
            <div class="card-block">
              <a href="imagens/em_construcao1.jpg" class="btn btn-info"><b>COMPRAR</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5 text-light bg-danger" style="background-image: url(&quot;../imagens/a (3).png&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center align-self-center my-5">
          <h1 class="display-1" style="opacity: 0.5;"><b>NELITEAPP</b></h1>
          <p class="lead">Com nosso aplicativo disponivel em Android e IOS, você tem todo controle em suas mãos</p>
          <div class="row mt-5">
            <div class="col-md-5 col-6">
              <a href="https://play.google.com/store?hl=pt_BR">
                <img class="center-block img-fluid d-block" src="https://pingendo.github.io/templates/sections/assets/download_android.png"> </a>
            </div>
            <div class="col-md-5 col-6">
              <a href="https://www.apple.com/br/ios/app-store/">
                <img class="center-block img-fluid d-block" src="https://pingendo.github.io/templates/sections/assets/download_ios.png"> </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img class="img-fluid d-block mx-auto" src="../imagens/a (2).png"> </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">New Elite</h2>
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