<?php 

require 'PedidoDAO.php';

class Pedido{
  private $id_pedido;
  private $valor_total;
  private $estadopedido;
  private $quantidade_item;
  private $nome;
  private $nome_cliente;
  private $endereco;
  private $telefone;

  //Get's
  function getID_pedido(){
return $this->id_pedido ;
  }
  function getValor_total(){
return $this->valor_total;
  }
  function getEstadopedido(){
return $this->estadopedido;
  }
  function getQuantidade_item(){
return $this->quantidade_item;
  }
  function getNome(){
return $this->nome;
  }
  function getNome_cliente(){
return $this->nome_cliente;
  }
  function getEndereco(){
return $this->endereco;
  }
  function getTelefone(){
return $this->telefone ;
  }


  //Set's

  public function setId_pedido($id_pedido){
    $this->id_pedido = $id_pedido;
  }
  public function setValor_pedido($valor_pedido){
    $this->valor_pedido = $valor_pedido;
  }
  public function setEstadopedido($estadopedido){
    $this->estadopedido = $estadopedido;
  }
  public function setQuantidade($quantidade){
    $this->quantidade = $quantidade;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function setNome_cliente($nome_cliente){
    $this->nome_cliente = $nome_cliente;
  }
  public function setEndereco($endereco){
  $this->endereco = $endereco;
  }
  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }

  public function addPedido()
  {
      $PedidoDAO = new PedidoDAO();
      $PedidoDAO->addPedido($this);
  }

  public function delPedido()
  {
      $PedidoDAO = new PedidoDAO();
      $PedidoDAO->delPedido($this);
  }

}

?>