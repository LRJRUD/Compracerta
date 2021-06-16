<?php
require "Model/Produtos.php";
class MyAccountAdm
{
    private $produtos;

    public function __construct()
    {
        $this->produtos = new Produtos();
    }

    public function processaRequisicao()
    {
        $listarProdutos = $this->produtos->listarProdutos();
        require "View/MyAccountAdm.php";
    }
}
