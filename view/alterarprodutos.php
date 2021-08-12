<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>
  		Projeto Final
	</title>
	<meta name="auhthor" content="Gabriel Külzer">
	<meta name="description" content="Projeto Final de WEB II">
	<meta name="keywords" content="programação, php, html, css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!--CSS NORMAL-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--Importando Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Importando materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>


	<body>
		<main class="geral">
			<header>
				<!-- Barra de navegação -->
				<div class="navbar-fixed">
			 	 <nav class="pink darken-4">
			 		 <div class="container">
			 			 <div class="nav-wrapper">
			 				 <a href="#" class="brand-logo">PadariaQI</a>
			 				 <a href="#" data-target="mobile-nav" class="sidenav-trigger">
			 					 <i class="material-icons">menu</i>
			 				 </a>
			 				 <ul class="right hide-on-med-and-down">
			 					 <li>
			 						 <a href="../index.php" class="waves-effect waves-purple">Home</a>
			 					 </li>
			 					 <li>
			 						 <a href="#" class="waves-effect waves-purple">Pesquisar</a>
			 					 </li>
			 				 </ul>
			 			 </div>
			 		 </div>
			 	 </nav>
			  </div>
			  <ul class="sidenav" id="mobile-nav">
					<li>
 					 <a href="../index.php">Home</a>
 				 </li>
 				 <li>
 					 <a href="../view/buscarprodutos.php">Pesquisar</a>
 				 </li>
			  </ul>
			</header>
			<!-- Barra de navegação -->

			<!--Slider com imagens-->
			  <section class="slider">
			    <ul class="slides">
			      <li>
			        <img src="../img/banner1.jpg">
			        <div class="caption center-align">
			          <h2>Venha conhecer nossos doces!</h2>
			          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, provident eos dicta unde debitis</h5>
			        </div>
			      </li>
			      <li>
			        <img src="../img/banner2.jpg">
			        <div class="caption left-align">
			          <h2>Ambiente ao ar livre</h2>
			          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus delectus inventore neque impedit</h5>
			        </div>
			      </li>
			      <li>
			        <img src="../img/banner3.jpg">
			        <div class="caption right-align">
			          <h2>Trabalhamos com produtos coloniais</h2>
			          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum molestias excepturi doloremque</h5>
			        </div>
			      </li>
			    </ul>
			  </section>

        <section>
          <h1 class="center">
            Lista <span class="pink-text">de</span> Produtos
          </h1>
          <!--Aqui chamamos a sessão para pegar o resultado da busca lá do controller-->
          <?php
            //se houver uma sessão produtos - pega para mim a variável que guardou a busca:
            if(isset($_SESSION['produtos'])){
              //incluir se ainda não foi incluso o modelo:
              include_once '../model/produto.class.php';
              //criar uma variável para guardar o resultado que veio da sessão (busca):
              $p = array();
              //nesta variável de array eu coloco o que tinha guardado na session:
              $p = unserialize($_SESSION['produtos']);
            }
           ?>
          <section class="formulario" id="formulario">
  					<div class="row">
  				<form class="col s12" action="../controller/produto.controller.php?op=confirmaralteracao" method="post" name="form01">
  				<div class="row">
            <div class="input-field col s12">
    				 <input  id="txtid" name="txtid" type="text" class="validate" required value="<?php echo $p[0]->idproduto ?>" readonly="readonly">
    				 <label for="txt" style="color:purple; font-weight:bold;">Id do Produto:</label>
    				</div>
  				<div class="input-field col s6">
  				 <input  id="txtnome" name="txtnome" type="text" class="validate" required value="<?php echo $p[0]->nome ?>">
  				 <label for="nome" style="color:purple; font-weight:bold;">Nome do Produto:</label>
  				</div>
  				<div class="input-field col s6">
  				 <input id="txtdescricao"  name="txtdescricao" type="text" class="validate" required value="<?php echo $p[0]->descricao ?>">
  				 <label for="descricao" style="color:purple; font-weight:bold;">Descrição do Produto:</label>
  				</div>
  				</div>
  				<div class="row">
  				<div class="input-field col s6">
  				 <input id="txtfornecedor" name="txtfornecedor" type="text" class="validate" required value="<?php echo $p[0]->fornecedor ?>">
  				 <label for="fornecedor" style="color:purple; font-weight:bold;">Fornecedor:</label>
  				</div>
  				<div class="input-field col s6">
  				 <input id="txtemail" type="email" name="txtemail" class="validate" required value="<?php echo $p[0]->email ?>">
  				 <label for="email" style="color:purple; font-weight:bold;">E-mail do Fornecedor:</label>
  				</div>
  				</div>
  				<div class="row">
  				<div class="input-field col s6">
  				 <input id="txttelefone" name="txttelefone" type="text" class="validate" required value="<?php echo $p[0]->telefone ?>">
  				 <label for="telefone" style="color:purple; font-weight:bold;">Telefone do Fornecedor:</label>
  				</div>
  				<div class="input-field col s6">
  				 <input id="numquantidade" type="number" class="validate" name="numquantidade" required value="<?php echo $p[0]->quantidade ?>">
  				 <label for="quantidade" style="color:purple; font-weight:bold;">Quantidade:</label>
  				</div>
  				<div class="input-field col s6">
  				 <input id="numvalor" name="numvalor" step="0.01" type="number" class="validate" required value="<?php echo $p[0]->valor ?>">
  				 <label for="valor" style="color:purple; font-weight:bold;">Valor Unitário:</label>
  				</div>
  				</div>
          <?php
            //Iremos fechar a sessão - garantindo segurança dos dados:
            unset($_SESSION['produtos']);
           ?>
  				<button class="btn waves-effect waves-light pink darken-4" type="submit" name="altera" value="Alterar">Enviar
  				<i class="material-icons right">send</i>
  				</button>
  				<button class="btn waves-effect waves-light pink darken-4" type="button" name="cancela" value="Cancelar" href="buscarcontatos.php">Cancelar
  				<i class="material-icons right">cancel</i>
  				</button>
  				</form>
  				</div>
  				</section>
  			</section>

			<footer class="page-footer pink darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Padaria QI</h5>
                <p class="grey-text text-lighten-4">Venha conhecer nossas delicias!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Pesquisar</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Gabriel Külzer
            <a class="grey-text text-lighten-4 right" href="#!">Mais Links</a>
            </div>
          </div>
        </footer>
		</main>
		<!--JavaScript no final do body para melhor optmização-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>

			<!--Barra Lateral-->
			<script>
				$(document).ready(function(){
					$('.sidenav').sidenav();
				});

				//Slider
    	const slider = document.querySelector('.slider');
    	M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });
			</script>
	</body>
</html>
