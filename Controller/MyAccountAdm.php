<?php
require "Model/Usuario.php";
class MyAccountAdm{
    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    public function processaRequisicao(){
        $listaProdutos = $this->produto->listarTodos();
        require "View/MyAccountAdm.php";
    }
}
    
    
?>