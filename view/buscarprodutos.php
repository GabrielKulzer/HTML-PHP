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

				<h1 class="center">
					Lista <span class="pink-text">de</span> Produtos
				</h1>

				<?php
					include '../model/produto.class.php';
					include '../dao/produtodao.class.php';
					//Instanciar a classe dao:
					$produtoDAO = new ProdutoDAO();
					//Criamos um objeto para pegar o resultado da busca:
					$produtos = $produtoDAO->buscarProdutos();
					//mostrar em tabelas:

					//var_dump($produtos);
					//foreach ($produtos as $p) {
					//	echo "<p><hr>".$p."</p>";
					//}
					?>
					<table class="responsive-table highlight">
						<thead>
							<tr>
								<th>ID Produto</th>
								<th>Nome</th>
								<th>Descrição</th>
								<th>Fornecedor</th>
								<th>E-mail</th>
								<th>Telefone</th>
								<th>Quantidade</th>
								<th>Valor Unitário</th>
								<th>Editar/Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
								 foreach ($produtos as $p) {
									 echo "<tr>";
									 echo "<td>".$p->idproduto."</td>";
									 echo "<td>".$p->nome."</td>";
									 echo "<td>".$p->descricao."</td>";
									 echo "<td>".$p->fornecedor. "</td>";
									 echo "<td>".$p->email."</td>";
									 echo "<td>".$p->telefone."</td>";
									 echo "<td>".$p->quantidade."</td>";
									 echo "<td>".$p->valor."</td>";
									 echo "<td>
									 <a href='../controller/produto.controller.php?op=alterar&idproduto=$p->idproduto' class='btn-floating btn-small waves-effect waves-light orange'><i class='material-icons'>create</i></a>
									 <a href='../controller/produto.controller.php?op=deletar&idproduto=$p->idproduto' class='btn-floating btn-small waves-effect waves-light red'><i class='material-icons')<i>delete_forever</i>
									 </a>
									 </td>";
									 echo "</tr>";
								 }
							 ?>
						</tbody>

						<tfoot>
						</tfoot>
					 </table>

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
