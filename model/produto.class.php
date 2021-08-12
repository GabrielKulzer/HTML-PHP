<?php
  class Produto{
    //Atributos - características:
    private $idproduto;
    private $nome;
    private $descricao;
    private $fornecedor;
    private $email;
    private $telefone;
    private $quantidade;
    private $valor;
    //Funções - ações da classe:
    //Função construir o objeto - instanciar
    public function __construct(){
      /*$this->nome = $nome;
      $this->descricao = $descricao;
      $this->fornecedor = $fornecedor;
      $this->email = $email;
      $this->telefone = $telefone;
      $this->quantidade = $quantidade;
      $this->valor = $valor;*/

    }
    //Gets e Sets - mágicos:
    public function __get($atributo){
      return $this->$atributo;
    }
    public function __set($atributo,$valor){
      $this->$atributo = $valor;
    }
    //Função toString:
    public function __toString(){
      return "<br>ID do produto: ".$this->idproduto.
             "<br>Nome do produto: ".$this->nome.
             "<br>Descrição: ".$this->quantidade.
             "<br>Fornecedor: ".$this->fornecedor.
             "<br>E-mail do Fornecedor: ".$this->email.
             "<br>Telefone do Fornecedor: ".$this->telefone.
             "<br>Quantidade: ".$this->quantidade.
             "<br>Valor Unitário: ".$this->valor;
    }
}

?>
