<?php

require 'PedidoDAO.php';

class Pedido
{
  private $IDproduto;
  private $NOMEproduto;
  private $quantidade;
  private $marca;
  private $descricao;
  private $validade;
  private $tipo;
  private $img_produto;

  //Get's
  function getIdproduto()
  {
    return $this->IDproduto;
  }
  function getNomeProduto()
  {
    return $this->NOMEproduto;
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
  function getImg_Produto()
  {
    return $this->img_produto;
  }

  //Set's

  public function setIdproduto($IDproduto)
  {
    $this->IDproduto = $IDproduto;
  }
  public function setNomeProduto($NOMEproduto)
  {
    $this->NOMEproduto = $NOMEproduto;
  }
  public function setQuantidade($quantidade)
  {
    $this->quantiade = $quantidade;
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
  public function setImg_Produto($img_produto)
  {
    $this->img_produto = $img_produto;
  }
}
