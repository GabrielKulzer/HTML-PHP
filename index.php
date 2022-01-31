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
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<!--JQuery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--Importando Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Importando outro pacote de icones-->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
      <!--Importando materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Adicionando máscara no telefone-->
	<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

		<!--Máscara-->
		<script type="text/javascript">
		 $("#txttelefone").mask("(00) 00000-0000");
		</script>
		<!--Máscara telefone form-->
		<script>$("#emailtel").mask("(00) 00000-0000");</script>

		<!--modal-->
		<script>
		$(document).ready(function(){
		    $('.modal').modal();
		  });
			</script>
</head>
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
			 						 <a href="index.php" class="waves-effect waves-purple">Home</a>
			 					 </li>
								 <li>
			 						 <a href="#produtos" class="waves-effect waves-purple">Produtos</a>
			 					 </li>
			 					 <li>
			 						 <a href="view/buscarprodutos.php" class="waves-effect waves-purple">Pesquisar</a>
			 					 </li>
			 					 <li>
			 						 <a href="#conteudo2" class="waves-effect waves-purple">Sobre</a>
			 					 </li>
			 					 <li>
			 						 <a href="#conteudo3" class="waves-effect waves-purple">Cadastrar</a>
			 					 </li>
								 <li>
			 						 <a href="#contato" class="waves-effect waves-purple">Contato</a>
			 					 </li>
			 				 </ul>
			 			 </div>
			 		 </div>
			 	 </nav>
			  </div>
			  <ul class="sidenav" id="mobile-nav">
					<li>
 					 <a href="index.php">Home</a>
 				 </li>
				 <li>
					 <a href="#produtos">Produtos</a>
				 </li>
 				 <li>
 					 <a href="view/buscarprodutos.php">Pesquisar</a>
 				 </li>
 				 <li>
 					 <a href="#conteudo2">Sobre</a>
 				 </li>
 				 <li>
 					 <a href="#conteudo3">Cadastrar</a>
 				 </li>
				 <li>
					 <a href="#contato">Contato</a>
				 </li>
			  </ul>
			</header>
			<!-- Fim Nav -->

			<!--Slider com imagens-->
			  <section class="slider">
			    <ul class="slides">
			      <li>
			        <img src="img/banner1.jpg">
			        <div class="caption center-align">
			          <h2>Venha conhecer nossos doces!</h2>
			          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, provident eos dicta unde debitis</h5>
			        </div>
			      </li>
			      <li>
			        <img src="img/banner2.jpg">
			        <div class="caption left-align">
			          <h2>Ambiente ao ar livre</h2>
			          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus delectus inventore neque impedit</h5>
			        </div>
			      </li>
			      <li>
			        <img src="img/banner3.jpg">
			        <div class="caption right-align">
			          <h2>Trabalhamos com produtos coloniais</h2>
			          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum molestias excepturi doloremque</h5>
			        </div>
			      </li>
			    </ul>
			  </section>
				<!-- Fim Slider -->

			<!-- Nossos Produtos -->
  <section id="produtos" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="pink-text">Nossos</span> Produtos</h4>
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="img/img1.jpg" alt="">
              <span class="card-title">Pães e Derivados</span>
            </div>
            <div class="card-content">
              Temos muitas variedades de Pães: Francês, Sovado, Cervejinha, Gajeta, Massinhas, Baquetes, Pães Integrais, Pães de sanduíche, Roscas de Polvilho, Pães torrados, ETC.
            </div>
						<div class="card-action">
							<!-- Botão Modal -->
  						<a class="waves-effect waves-light btn modal-trigger pink darken-4" href="#modal1">Ver Mais</a>
						<!-- Estrutura do Modal -->
  							<div id="modal1" class="modal">
    				<div class="modal-content">
      				<h4>Pães e Derivados</h4>
	      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    				</div>
    						<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-red btn-flat red-text">Fechar</a>
    						</div>
  						</div>
		        </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="img/img2.jpg" alt="">
              <span class="card-title">Doces e Derivados</span>
            </div>
            <div class="card-content">
              Na sessão de doces temos: Rocamboles, Quindim, Mousses, Sobremesas, Negrinho e Branquinho, Bombas, Sonhos, Cueca Virada, Cocadas, Doces Glaceados e Caramelizados, ETC.
            </div>
						<div class="card-action">
							<!-- Botão Modal -->
  						<a class="waves-effect waves-light btn modal-trigger pink darken-4" href="#modal2">Ver Mais</a>
						<!-- Estrutura do Modal -->
  							<div id="modal2" class="modal">
    				<div class="modal-content">
      				<h4>Doces e Derivados</h4>
	      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    				</div>
    						<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-red btn-flat red-text">Fechar</a>
    						</div>
  						</div>
		        </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="img/img6.jpg" alt="">
              <span class="card-title">Produtos Coloniais</span>
            </div>
            <div class="card-content">
              Aqui você encontra diversos tipos de Produtos Coloniais como: Queijos, Salames, Doces, Chimias, Vinhos, Destilados, Presuntos, Lombo Defumado, ETC.
            </div>
						<div class="card-action">
							<!-- Botão Modal -->
  						<a class="waves-effect waves-light btn modal-trigger pink darken-4" href="#modal3">Ver Mais</a>
						<!-- Estrutura do Modal -->
  							<div id="modal3" class="modal">
    				<div class="modal-content">
      				<h4>Produtos Coloniais</h4>
	      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    				</div>
    						<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-red btn-flat red-text">Fechar</a>
    						</div>
  						</div>
		        </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- Fim Nossos Produtos -->

	<!-- Sessão Galeria -->
	  <section id="gallery" class="section section-gallery scrollspy">
	    <div class="container">
	      <h4 class="center">
	        <span class="pink-text">Nossa</span> Galeria
	      </h4>
	      <div class="row">
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?beach" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?travel" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?nature" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?beach, travel" alt="" class="materialboxed responsive-img">
	        </div>
	      </div>

	      <div class="row">
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?water" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?building" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?trees" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?cruise" alt="" class="materialboxed responsive-img">
	        </div>
	      </div>

	      <div class="row">
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?beaches" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?traveling" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?bridge" alt="" class="materialboxed responsive-img">
	        </div>
	        <div class="col s12 m3">
	          <img src="https://source.unsplash.com/1600x900/?beach, travel,boat" alt="" class="materialboxed responsive-img">
	        </div>
	      </div>
	    </div>
	  </section>
		<!-- Fim Galeria -->

		<!-- Sessão Sobre-->
			<section class="conteudo2" id="conteudo2">
        <h4 class="center">
					<span class="pink-text">Sobre</span> Nós
				</h4>
        <p>Fundada em 10 de Junho de 1965, a Padaria QI tem como principais operações a fabricação, venda e distribuição de produtos de panificação, confeitaria e produtos congelados.</p>
				<hr>
				<p>É uma tradicional empresa com mais de 50 anos de atuação no ramo, reconhecida pela qualidade e variedade dos seus produtos (pães, cucas, bolos, tortas, doces, salgados, produtos congelados, lanches, etc) e serviços, dentre os quais destacam-se o pioneiro e inovador na região “Atendimento 24 Horas”, a distribuição de pães e produtos de confeitaria  para empresas (supermercados, casas de lanches, refeitórios industriais, …), o serviço de “Tele Entregas” e a parceria “Ponto Quente”, que consiste na distribuição de pães e salgados congelados em diversas regiões do RS.</p>
				<hr>
				<p>A empresa conta com um quadro composto por aproximadamente 250 funcionários subdivididos entre matriz e filial, que atuam nas áreas de produção (panificação, confeitaria, congelados e cozinha), balcão de atendimento 24 Horas, vendas, expedição, distribuição e administração, em instalações que ocupam uma área física de aproximadamente 2500 m2 na matriz e 3600 m² na filial (indústria de pães e salgados congelados).</p>
				<hr>
				<p>Nos setores de produção denominados panificação e congelados, a fabricação de pães se dá em larga escala, com processos produtivos automatizados, principalmente na confecção de pães congelados, pães de bauru, cachorro quente e de forma.</p>
				<hr>
				<p>Na confeitaria são produzidos os pães especiais, cucas, bolos, tortas, doces, salgados, folhados, biscoitos, panetones, produtos integrais, enfim, aqueles que demandam processos mais artesanais e exigem mão-de-obra especializada.</p>
				<hr>
				<p>A Padaria QI investe continuamente nos mais modernos equipamentos e técnicas de produção, no treinamento e capacitação do quadro de colaboradores e nas parcerias com clientes e fornecedores, com o objetivo principal de garantir a excelência na qualidade de seus produtos e serviços e a plena satisfação de seus clientes.</p>
      </section>
			<!-- Fim Sobre -->

			<!-- Sessão Redes Sociais-->
  <section class="section section-follow pink darken-4 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Siga a Padaria QI</h4>
          <p>Siga-nos para receber nossas promoções.</p>
          <a href="https://pt-br.facebook.com/escolhaQI/" target="_blank" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="https://twitter.com/escolhaqi" target="_blank" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="https://br.linkedin.com/company/qi-escolas-e-faculdades" target="_blank" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="https://www.google.com.br/" target="_blank" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
          <a href="https://br.pinterest.com/" target="_blank" class="white-text">
            <i class="fab fa-pinterest fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
		<!-- Fim Redes Sociais -->

		<!-- Sessão Cadastro -->
			<section class="conteudo3" id="conteudo3">
				<h4 class="center">
					<span class="pink-text">Cadastre</span> seus <span class="pink-text">Produtos</span>
				</h4>
				<section class="formulario" id="formulario">
					<div class="row">
				<form class="col s12" action="controller/produto.controller.php?op=cadastrar" method="post" name="form01">
				<div class="row">
				<div class="input-field col s6">
				 <input  id="txtnome" name="txtnome" type="text" class="validate" required>
				 <label for="nome" style="color:purple; font-weight:bold;">Nome do Produto:</label>
				</div>
				<div class="input-field col s6">
				 <input id="txtdescricao"  name="txtdescricao" type="text" class="validate" required>
				 <label for="descricao" style="color:purple; font-weight:bold;">Descrição do Produto:</label>
				</div>
				</div>
				<div class="row">
				<div class="input-field col s6">
				 <input id="txtfornecedor" name="txtfornecedor" type="text" class="validate" required>
				 <label for="fornecedor" style="color:purple; font-weight:bold;">Fornecedor:</label>
				</div>
				<div class="input-field col s6">
				 <input id="txtemail" type="email" name="txtemail" class="validate" required>
				 <label for="email" style="color:purple; font-weight:bold;">E-mail do Fornecedor:</label>
				</div>
				</div>
				<div class="row">
				<div class="input-field col s6">
				 <input id="txttelefone" name="txttelefone" type="text" class="validate" required>
				 <label for="telefone" style="color:purple; font-weight:bold;">Telefone do Fornecedor:</label>
				</div>
				<div class="input-field col s6">
				 <input id="numquantidade" type="number" class="validate" name="numquantidade" required>
				 <label for="quantidade" style="color:purple; font-weight:bold;">Quantidade:</label>
				</div>
				<div class="input-field col s6">
				 <input id="numvalor" name="numvalor" step="0.01" type="number" class="validate" required>
				 <label for="valor" style="color:purple; font-weight:bold;">Valor Unitário:</label>
				</div>
				</div>
				<div class="botoesform">
				<button class="btn waves-effect waves-light pink darken-4" type="submit" name="action">Enviar
				<i class="material-icons right">send</i>
				</button>
				<button class="btn waves-effect waves-light pink darken-4" type="reset" name="action">Limpar
				<i class="material-icons right">cancel</i>
				</button>
				</div>
				</form>
				</div>
				</section>
			</section>
			<!-- Fim Cadastro -->

			<!-- Sessão Contato -->
  <section id="contato" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel pink darken-4 white-text center">
            <i class="material-icons">email</i>
            <h5>Receba nossas promoções!</h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium fugit tempore hic enim possimus molestias
              quisquam impedit corrupti eveniet.</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Localização</h4>
            </li>
            <li class="collection-item">Padaria e Confeitaria QI</li>
            <li class="collection-item">Avenida Assis Brasil</li>
            <li class="collection-item">Porto Alegre, RS</li>
          </ul>
        </div>
				<form method="POST" name="form2" id="form2" action="enviar.php">
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Formulário para contato</h5>
            <div class="input-field">
              <input type="text" placeholder="Nome" class="validate" id="emailnome" name="emailnome" pattern="[A-Za-zÙ-Áù-á ]{2,50}$" required>
            </div>
            <div class="input-field">
              <input type="email" placeholder="Email" class="validate" id="emailemail" name="emailemail" required>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Telefone" class="validate" id="emailtel" name="emailtel" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" required>
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Insira sua Mensagem" class="validate" id="emailmen" name="emailmen" required></textarea>
            </div>
						<button class="btn waves-effect waves-light pink darken-4" type="submit" name="action">Enviar
						<i class="material-icons right">send</i>
						</button>
						<button class="btn waves-effect waves-light pink darken-4" type="reset" name="action">Limpar
						<i class="material-icons right">cancel</i>
						</button>
          </div>
				</form>
        </div>
      </div>
    </div>
  </section>
		<!-- Fim Contato -->

		<!-- Sessão Footer -->
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
                  <li><a class="grey-text text-lighten-3" href="view/buscarprodutos.php">Pesquisar</a></li>
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
				<!-- Fim Footer -->
		</main>
		<!--JavaScript no final do body para melhor optmização-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

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

		// Script Galeria
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

		// Script ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});
			</script>

	</body>
</html>
