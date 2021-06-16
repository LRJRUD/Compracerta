<?php
require "ProdutosDAO.php";

class Produtos
{

  private $id_produto;
  private $nome_produto;
  private $quantidade;
  private $marca;
  private $descricao;
  private $validade;
  private $tipo;
  private $img_produto;

  //Get's
  function getId_produto()
  {
    return $this->id_produto;
  }

  function getNome_produto()
  {
    return $this->nome_produto;
  }

  function getQuantidade()
  {
    return $this->quantidade;
  }

  function getMarca()
  {
    return $this->marca;
  }

  function getDescricao()
  {
    return $this->descricao;
  }

  function getValidade()
  {
    return $this->validade;
  }

  function getTipo()
  {
    return $this->tipo;
  }

  function getImg_produto()
  {
    return $this->img_produto;
  }

  //Set's
  public function setId_produto($id_produto)
  {
    $this->id_produto = $id_produto;
  }

  public function setNome_produto($nome_produto)
  {
    $this->nome_produto = $nome_produto;
  }

  public function setQuantidade($quantidade)
  {
    $this->quantidade = $quantidade;
  }

  public function setMarca($marca)
  {
    $this->marca = $marca;
  }

  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;
  }

  public function setValidade($validade)
  {
    $this->validade = $validade;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  public function setImg_produto($img_produto)
  {
    $this->img_produto = $img_produto;
  }

  public function addProdutos()
  {
    $ProdutosDAO = new ProdutosDAO();
    $ProdutosDAO->addProdutos($this);
  }

  public function delProdutos()
  {
    $ProdutosDAO = new ProdutosDAO();
    $ProdutosDAO->delProdutos($this);
  }
}
