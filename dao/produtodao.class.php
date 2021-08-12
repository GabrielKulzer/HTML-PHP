<?php
  //Requerindo a classe de conexão com o banco:
  require '../persistence/conexaobanco.class.php';

  class ProdutoDAO { //DAO Acesso a dados do objeto
    //Atributo de conexao:
    private $conexao = null;

    //Método construtor:
    public function __construct(){
      //Quando pedir conexao - iremos acessar a pesistência e pegar a conexão do banco lá: getInstance()
      $this->conexao = ConexaoBanco::getInstance();
    }
    //Método para sair do banco - destruir a conexao:
    public function __destruct(){

    }

    //A PARTIR DAQUI FAREMOS UMA POR UMA DAS FUNÇÕES DO CRUD:
    //**Create - INSERT (banco) - Cadastrar
    //**Read - SELECT (banco) - ler - pesquisar - listar
    //Update - UPDATE (banco) - editar - atualizar
    //Delete - DELETE (banco) - excluir - deletar

    //Função para cadastrar:
    public function cadastrarProduto($p){
      try{ //Tratando excessoes de erros - ver onde não está funcionando no banco.
        //LEMBRANDO QUE O BD É CASE INSENSITIVE:
        $stat = $this->conexao->prepare("INSERT INTO produto (idproduto,nome,descricao,fornecedor,email,telefone,quantidade,valor)VALUES(NULL,?,?,?,?,?,?,?)");
        //Pegando os atributos da classe Produto e colocando no lugar dos ?
        $stat->bindValue(1,$p->nome);
        $stat->bindValue(2,$p->descricao);
        $stat->bindValue(3,$p->fornecedor);
        $stat->bindValue(4,$p->email);
        $stat->bindValue(5,$p->telefone);
        $stat->bindValue(6,$p->quantidade);
        $stat->bindValue(7,$p->valor);
        //mandamos executar a linha de comando do prepare:
        $stat->execute();
      }catch(PDOException $e){
        echo "ERRO! Não foi possível cadastrar o produto." .$e;
      }
    }//Fim cadastrar

    //Função para listar todos os cadastros:
    public function buscarProdutos(){
      try{
        $stat = $this->conexao->query("SELECT * FROM produto");
        $array = array();
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Produto');
        $this->conexao = null;
        return $array;
      }catch(PDOException $e){
        echo "ERRO! Não foi possível buscar produtos." .$e;
      }
    }//Fim buscar

    //Função para deletar contato:
    public function deletarProduto($idproduto){
      //tratando de excessoes
      try {
        //criamosuma variavel que acessa o banco e cria a script:
        $stat = $this->conexao->prepare("DELETE FROM produto WHERE idproduto=?");
        //Definindo valor do bind:
        $stat->bindValue(1,$idproduto);
        //Executamos o script:
        $stat->execute();
        //finalizamos a execução:
        $stat->conexao = null;
      } catch (PDOException $e) {
        echo "ERRO! Não foi possível deletar o produto." .$e;
      }
    }//fim da função deletar

    //Função para pesquisa específica ou abragente
    public function buscar($query){
      //tratando excessões:
      try {
        //variável que irá fazer a busca no banco:
        $stat = $this->conexao->query("SELECT * FROM produto ".$query);
        //guardar em uma variável o resultado da busca:
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Produto');
        //finalizar a conexão:
        $this->conexao = null;
        //restornar o resultado da busca:
        return $array;
      } catch (PDOException $e) {
        echo "ERRO! Não foi possível buscar o produto." .$e;
      }
    }//fim da função buscar

    //Função para editar produtos:
    public function alterarProduto($p){
      //tratando excessões
      try {
        $stat = $this->conexao->prepare("UPDATE produto SET nome = ?, descricao = ?, fornecedor = ?, email = ?, telefone = ?, quantidade = ?, valor = ? WHERE idproduto = ? ");
        //Definir o valor dos binds ???
        $stat->bindValue(1,$p->nome);
        $stat->bindValue(2,$p->descricao);
        $stat->bindValue(3,$p->fornecedor);
        $stat->bindValue(4,$p->email);
        $stat->bindValue(5,$p->telefone);
        $stat->bindValue(6,$p->quantidade);
        $stat->bindValue(7,$p->valor);
        $stat->bindValue(8,$p->idproduto);
        //executamos o script do banco:
        $stat->execute();
        //fim da conexao:
        $this->conexao = null;
      } catch (PDOException $e) {
        echo "ERRO! Não foi possível alterar o produto." .$e;
      }
    }//fim do alterarProduto

  }//Fim da classe

 ?>
