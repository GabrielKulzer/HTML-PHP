<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>
  		Projeto Final
	</title>
	<meta name="auhthor" content="Gabriel Külzer">
	<meta name="description" content="Projeto Final de WEB II">
	<meta name="keywords" content="programação, php, html, css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

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
			 						 <a href="../index.php">Home</a>
			 					 </li>
			 					 <li>
			 						 <a href="../view/buscarprodutos.php">Pesquisar</a>
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
			<section>

					<?php
          include '../model/produto.class.php';
          include '../util/util.class.php';
          //Aqui tbm ficará um include do BD - do pacote DAO
          //DEPOIS
          include '../dao/produtodao.class.php';
          //Instanciar a classe de validação:
          $u1 = new Util();
					//Switch funções
					switch($_GET['op']){
						//case para cadastrar:
						case 'cadastrar':
          //Pegar os dados do form:
          $nome =  $_POST['txtnome'];
          $descricao = $_POST['txtdescricao'];
          $fornecedor = $_POST['txtfornecedor'];
          $email = $_POST['txtemail'];
          $telefone = $_POST['txttelefone'];
          $quantidade = $_POST['numquantidade'];
          $valor = $_POST['numvalor'];
          //Validando para criar o objeto:
          if(empty($nome) || empty($descricao) ||empty($fornecedor) || empty($email) || empty($telefone) || empty($quantidade) ||empty($valor)){
            echo 'Preencha os dados.';
          } else if(!$u1->testarExpressaoRegular('/^[A-Za-zÙ-Áù-á ]{2,50}$/',$nome)){
            echo 'Nome fora do padrão';
          } else if(!$u1->testarExpressaoRegular('/^[A-Za-zÙ-Áù-á ]{2,255}$/',$descricao)){
            echo 'Descrição fora de padrão';
          } else if(!$u1->testarExpressaoRegular('/^[A-Za-zÙ-Áù-á ]{2,50}$/',$fornecedor)){
            echo 'Fornecedor fora de padrão';
          } else if(!$u1->validarEmail($email)){
            echo 'E-mail fora de padrão';
					}	else if(!$u1->testarExpressaoRegular('/^\([1-9]{2}\) (?:[2-9]|9[1-9])[0-9]{3}\-[0-9]{4}$/',$telefone)){
            echo 'Telefone fora de padrão';
          }	else if(!$u1->testarExpressaoRegular('/^[0-9]{1,10}$/',$quantidade)){
            echo 'Quantidade fora de padrão';
          } else {
            $p1 = new Produto();
            //Mandando os dados para o objeto:
            $p1->nome = $nome;
            $p1->descricao = $descricao;
            $p1->fornecedor = $fornecedor;
            $p1->email = $email;
            $p1->telefone = $telefone;
            $p1->quantidade = $quantidade;
            $p1->valor = $valor;

            echo $p1;

            //echo "<hr><p>Testando o objeto no array </p>";
            //var_dump($c1);

            //CONEXAO BANCO E CADASTRO:
            $produtoDAO = new ProdutoDAO();
            $produtoDAO->cadastrarProduto($p1);
						//Mensagem confirmando o cadastro
						header('location:../view/confirmacadastro.html');
          }//Fim else cadastro
					break;
					//Case para deletar
					case 'deletar':
						//Instanciar a classe DAO:
						$pDAO = new ProdutoDAO();
						//Vamos chamar a função que deleta:
						$pDAO->deletarProduto($_REQUEST['idproduto']);
						//direcionar para uma página:
						header('location:../view/buscarprodutos.php');
					break;
					//Case para alterar o produto
					case 'alterar':
						//Pegamos o idproduto:
						$idproduto = $_REQUEST['idproduto'];
						//mostar a query de busca:
						$query = 'WHERE idproduto = '.$idproduto;
						//criar um objeto para acessar a classe DAO:
						$pDAO = new ProdutoDAO();
						//Criamos uma variável para guardar o resultado da busca:
						$produtos = array();
						//Fazer a busca e armazenar a resposta:
						$produtos = $pDAO->buscar($query);
						//Transportando resultado da busca
						$_SESSION['produtos'] = serialize($produtos);
						//direcionar o nosso usuário para a página que permite a alteração:
						header('location:../view/alterarprodutos.php');
					break;
					//Case que realmente fará alteração do produto:
					case 'confirmaralteracao':
						//instancia produto:
						$p = new Produto();
						//IDEAL É VALIDAR ASSIM COMO CADASTRAR - QUEROOOOOO NO PROJETO DE VCS
						//pegando os dados do form:
						$p->idproduto =  $_POST['txtid'];
						$p->nome =  $_POST['txtnome'];
						$p->descricao = $_POST['txtdescricao'];
						$p->fornecedor = $_POST['txtfornecedor'];
						$p->email = $_POST['txtemail'];
						$p->telefone = $_POST['txttelefone'];
						$p->quantidade = $_POST['numquantidade'];
						$p->valor = $_POST['numvalor'];
						//Enviamos objeto para DAO:
						$pDAO = new ProdutoDAO();
						//Chamamos a função de alterar do DAO:
						$pDAO->alterarProduto($p);
						//Direciona o usuário para o buscar:
						header('location:../view/buscarprodutos.php');
					break;
					default:
						echo "ERRO!";
					}//fecha switch case
?>
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
                  <li><a class="grey-text text-lighten-3" href="../view/buscarprodutos.php">Pesquisar</a></li>
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
