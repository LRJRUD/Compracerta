<?php
require "Conexao.php";

class ProdutosDAO
{

    public function addProdutos($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into produtos (nome_produto, quantidade, marca, descricao, validade, tipo, img_produto)
            values (:nome_produto, :quantidade, :marca, :descricao, :validade, :tipo, :img_produto)");

            //get's
            $nome_produto = $user->getNome_produto();
            $quantidade = $user->getQuantidade();
            $marca = $user->getMarca();
            $descricao = $user->getDescricao();
            $validade = $user->getValidade();
            $tipo = $user->getTipo();
            $img_produto = $user->getImg_produto();

            //param's
            $sql->bindParam("nome_produto", $nome_produto);
            $sql->bindParam("quantidade", $quantidade);
            $sql->bindParam("marca", $marca);
            $sql->bindParam("descricao", $descricao);
            $sql->bindParam("validade", $validade);
            $sql->bindParam("tipo", $tipo);
            $sql->bindParam("img_produto", $img_produto);

            $sql->execute();

            //echo "incluido com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $user->setId_produto($last_id);
            //echo "o numero gerado foi ",$last_id;
            return $last_id;
        } catch (PDOException $e) {
            die($e->getMessage());
            return 0;
        }
    }

    public function delProdutos($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from produtos where id_produto = :id_produto");
            $sql->bindParam("id_produto", $id_produto);
            $id_produto = $user->getId_produto();
            $sql->execute();

        } catch (PDOException $e) {
            echo "Algo deu errado no produto" . $e->getmessage();
            exit();
        }
    }

    public function listarProdutos($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from produtos");

        $sql-> execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);;

        
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $linha['id_produto'] . "<br>";
            echo "Nome: " . $linha['nome_produto'] . "<br>";
            echo "Quantidade: " . $linha['quantidade'] . "<br>";
            echo "Marca: " . $linha['marca'] . "<br><hr>";
          }
        return $lisProdutos;
       }
       catch(PDOException $e){
        return array();
    
    



        }
    }
}