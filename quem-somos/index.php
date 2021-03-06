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
      <title> NEW-ELITE | QUEM SOMOS </title>
      <meta name="description" content="O NELITEAPP foi criado para você que quer ter total controle aonde você estiver. com ele você acessa seu aplicativo de uma forma fácil e segura, sem utiliziar computadores e notebooks, você abre seu estoque na palma de sua mão.">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   </head>
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
      <div class="py-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="text-center display-3 text-primary"><b class="text-danger"><b>NEW ELITE</b></b>
                  </h1>
                  <p class=""><b>A New elite foi criada por alunos da Faculdade brasileira de São Paulo Universidade Nove de Julho (Uninove), com intuito de para um projeto de semestre, mais a ideia criada, foi de grande sucesso, alguns meses depois a New Elite Saiu do Projeto
                     E tomou vida.
                     <br>Hoje somos a empresa que mais vem crescendo em 2017.</b>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="py-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <img class="img-fluid d-block w-100 mb-3 rounded" src="../imagens/a (5).jpg">
                        <p class=""><b>Nossa equipe e formada por jovens analistas de sistemas que vem aprimorando seus conhecimentos a cada dia que passa e superando os concorrentes.</b></p>
                     </div>
                     <div class="col-md-6">
                        <img class="img-fluid d-block w-100 mb-3 rounded" src="../imagens/a (3).jpg">
                        <p class=""><b>Nosso escritorio, atende aos mais diversos clientes, tanto empresas pequenas como de grande porte, prestamos consultoria para todas.</b></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="py-5">
         <div class="container">
            <div class="row mb-5">
               <div class="col-md-7">
                  <h2 class="text-primary"><b class="text-danger">Suporte ao Cliente</b></h2>
                  <p class=""><b>Para qualquer eventualidade que seja necessário suporte, temos uma equipe de tecnicos em prontidão para o suporte do seu sistema 24H, podendo ser solicitados via redes sociais, Email e telefone.</b></p>
               </div>
               <div class="col-md-5 align-self-center">
                  <img class="img-fluid d-block w-100 img-thumbnail" src="../imagens/a (1).jpeg"> 
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="../imagens/a (4).jpg"> 
               </div>
               <div class="col-md-7">
                  <h2 class="pt-3 text-danger"><b>Os clientes estão no centro de tudo o que fazemos.</b></h2>
                  <p class=""><b>Ouvimos atentamente as necessidades e os desejos de nossos clientes e buscamos encontrar novas formas para que a tecnologia seja mais eficiente para eles.</b></p>
               </div>
            </div>
         </div>
      </div>
      <div class="bg-dark text-white">
         <div class="container">
            <div class="row">
               <div class="p-4 col-md-3">
                  <h2 class="mb-4 text-secondary">New Elite</h2>
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
                     <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 fa-envelope-o text-light"></i>c</a>ontato@newelite.com
                  </p>
                  <p>
                     <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-light"></i>7</a>98 Rua Augusta,BR
                  </p>
               </div>
               <div class="p-4 col-md-3">
                  <h2 class="mb-4 text-light">Inscrever-se</h2>
                  <form>
                     <fieldset class="form-group text-white"> <label for="exampleInputEmail1">
                        Receba nossa newsletter</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> 
                     </fieldset>
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