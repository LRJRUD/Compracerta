<?php
require "Model/Produtos.php";
class RegisterProduct
{

    public function __construct()
    {
        $this->user = new Produtos();
    }

    public function processaRequisicao()
    {
        //receber os dados do formulario e setar o objeto
        $this->user->setNome_produto($_POST['nome_produto']);
        $this->user->setTipo($_POST["tipo"]);
        $this->user->setMarca($_POST['marca']);
        $this->user->setDescricao($_POST['descricao']);
        $this->user->setValidade($_POST["validade"]);
        $this->user->setQuantidade($_POST['quantidade']);
        $this->user->setImg_produto($_POST["img_produto"]);
        
        

        if ($this->user->addProdutos()) {
            header('Location:Home.php', true, 302);
        }

        // Deu ruim
        header('Location:Home.php', true, 302);
    }
}