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
			case 3:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="/cadastro" class="close" data-dismiss="alert">&times</a>
						Usuário não foi cadastrado com sucesso.
					</div>
				</div>
			<?php
			session_start();
			break;
			case 4:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="/cadastro" class="close" data-dismiss="alert">&times</a>
						Já existe um usuario cadastrado.
					</div>
				</div>
			<?php
			session_start();
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
      <title> NEW-ELITE | CADASTRO </title>
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
                  <li class="nav-item">
                     <a class="nav-link" href="/login"><b class="text-light my-2">LOGIN | CADASTRE-SE<br></b></a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="py-5 opaque-overlay bg-dark text-dark" style="background-image: url(&quot;../imagens/a (1).png&quot;);">
      <form class="" method="post" action="../cad_usuario.php" >
         <div class="container py-5">
            <div class="row">
               <div class="col-md-4">
                  <div class="col-md-12">
                     <h1 class="text-gray-dark">Dados de login </h1>
                     <div> <label>E-mail: </label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo $_SESSION['email'] ?>" required="" autofocus=""> 
                     </div>
                     <div> <label>Usuário</label>
                        <input type="usuario" name="usuario" class="form-control" placeholder="Usuário" value="<?php echo $_SESSION['usuario'] ?>" required="" autofocus=""> 
                     </div>
                     <div> <label>Senha</label>
                        <input type="password" name="password" class="form-control" placeholder="Senha" value="<?php echo $_SESSION['password'] ?>" required=""> 
                     </div>
                     <div> <label>Confirmar Senha</label>
                        <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirmar senha" value="<?php echo $_SESSION['passwordConfirm'] ?>" required=""> 
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="col-md-13">
                     <h1 class="text-gray-dark">Dados Pessoais</h1>
                     <table style="margin-bottom: 12%;">
                        <tr>
                           <td colspan="3">
                              <div> <label>Nome: </label>
                                 <input readonly type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['nome'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                           <td style="display: table; float:left; margin-right:10px"/>
                           <td>
                              <div > <label>Sobrenome: </label>
                                 <input readonly type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" value="<?php echo $_SESSION['sobrenome'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td  style="display: table; float:left; margin-right:10px">
                              <div > <label>RG: </label>
                                 <input readonly type="text" name="rg" class="form-control rg" placeholder="RG" value="<?php echo $_SESSION['rg'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                           <td style="display: table; float:left; margin-right:10px" >
                              <div > <label>CPF: </label>
                                 <input readonly type="text" name="cpf" class="form-control cpf" placeholder="CPF" value="<?php echo $_SESSION['cpf'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                           <td colspan="4">
                              <div > <label>Nascimento: </label>
                                 <input readonly type="Date" name="nascimento" class="form-control" placeholder="Nascimento"  value="<?php echo $_SESSION['nascimento'] ?>" autofocus=""> 
                              </div>
                           </td>
                        </tr>
                     </table>
                     <h1 class="text-gray-dark">Dados de Endereço</h1>
                     <table>
                        <tr>
                           <td colspan="3" >
                              <div> <label>Rua: </label>
                                 <input type="text" name="rua" class="form-control" placeholder="Rua"  value="<?php echo $_SESSION['rua'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                           <td style="display: table; float:left; margin-right:10px"/>
                           <td>
                              <div > <label>Numero: </label>
                                 <input type="Number" name="numero" class="form-control numero" placeholder="" value="<?php echo $_SESSION['numero'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="display: table; float:left; margin-right:10px">
                              <div> <label>Cep: </label>
                                 <input type="text" name="cep" class="form-control cep" placeholder="Cep" value="<?php echo $_SESSION['cep'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                           <td colspan="4">
                              <div> <label>Bairro: </label>
                                 <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="<?php echo $_SESSION['bairro'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                        <tr>
                           <td style="display: table; float:left; margin-right:10px">
                              <div > <label>Cidade: </label>
                                 <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="<?php echo $_SESSION['cidade'] ?>" required="" autofocus=""> 
                              </div>
                           </td>
                           <td>
                              <div >
                                 <label>Estado: </label>
                                 <select name="estado" class="form-control">
                                    <option value="select">Selecione</option>
                                    <option value="ac"<?php echo selected( 'ac', $_SESSION['estado'] ); ?>>Acre</option>
                                    <option value="al"<?php echo selected( 'al', $_SESSION['estado'] ); ?>>Alagoas</option>
                                    <option value="am"<?php echo selected( 'am', $_SESSION['estado'] ); ?>>Amazonas</option>
                                    <option value="ap"<?php echo selected( 'ap', $_SESSION['estado'] ); ?>>Amapá</option>
                                    <option value="ba"<?php echo selected( 'ba', $_SESSION['estado'] ); ?>>Bahia</option>
                                    <option value="ce"<?php echo selected( 'ce', $_SESSION['estado'] ); ?>>Ceará</option>
                                    <option value="df"<?php echo selected( 'df', $_SESSION['estado'] ); ?>>Distrito Federal</option>
                                    <option value="es"<?php echo selected( 'es', $_SESSION['estado'] ); ?>>Espírito Santo</option>
                                    <option value="go"<?php echo selected( 'go', $_SESSION['estado'] ); ?>>Goiás</option>
                                    <option value="ma"<?php echo selected( 'ma', $_SESSION['estado'] ); ?>>Maranhão</option>
                                    <option value="mt"<?php echo selected( 'mt', $_SESSION['estado'] ); ?>>Mato Grosso</option>
                                    <option value="ms"<?php echo selected( 'ms', $_SESSION['estado'] ); ?>>Mato Grosso do Sul</option>
                                    <option value="mg"<?php echo selected( 'mg', $_SESSION['estado'] ); ?>>Minas Gerais</option>
                                    <option value="pa"<?php echo selected( 'pa', $_SESSION['estado'] ); ?>>Pará</option>
                                    <option value="pb"<?php echo selected( 'pb', $_SESSION['estado'] ); ?>>Paraíba</option>
                                    <option value="pr"<?php echo selected( 'pr', $_SESSION['estado'] ); ?>>Paraná</option>
                                    <option value="pe"<?php echo selected( 'pe', $_SESSION['estado'] ); ?>>Pernambuco</option>
                                    <option value="pi"<?php echo selected( 'pi', $_SESSION['estado'] ); ?>>Piauí</option>
                                    <option value="rj"<?php echo selected( 'rj', $_SESSION['estado'] ); ?>>Rio de Janeiro</option>
                                    <option value="rn"<?php echo selected( 'rn', $_SESSION['estado'] ); ?>>Rio Grande do Norte</option>
                                    <option value="ro"<?php echo selected( 'ro', $_SESSION['estado'] ); ?>>Rondônia</option>
                                    <option value="rs"<?php echo selected( 'rs', $_SESSION['estado'] ); ?>>Rio Grande do Sul</option>
                                    <option value="rr"<?php echo selected( 'rr', $_SESSION['estado'] ); ?>>Roraima</option>
                                    <option value="sc"<?php echo selected( 'sc', $_SESSION['estado'] ); ?>>Santa Catarina</option>
                                    <option value="se"<?php echo selected( 'se', $_SESSION['estado'] ); ?>>Sergipe</option>
                                    <option value="sp"<?php echo selected( 'sp', $_SESSION['estado'] ); ?>>São Paulo</option>
                                    <option value="to"<?php echo selected( 'to', $_SESSION['estado'] ); ?>>Tocantins</option>
                                 </select>
                              </div>
                           </td>
                        </tr>
                     </table>
                     </br>
                     <div class="btn-group" style="float: right;" >
                        <button type="submit" class="btn btn-secondary">ENVIAR</button>
                        <button type="reset" class="btn btn-secondary">LIMPAR</button>
                     </div>
                  </div>
               </div>
            </div>
      </form>
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
                  <h2 class="mb-4">Contact</h2>
                  <p>+55 11 27244706</p>
                  <p>
                     <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 fa-envelope-o text-light"></i>c</a>ontato@newelite.com
                  </p>
                  <p>
                     <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-light"></i>7</a>98 Rua Augusta,BR
                  </p>
               </div>
               <div class="p-4 col-md-3">
                  <h2 class="mb-4 text-light">Subscribe</h2>
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