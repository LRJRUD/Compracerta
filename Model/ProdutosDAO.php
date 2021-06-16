<?php
require "Conexao.php";

class ProdutosDAO
{

    public function addProdutos($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("INSERT INTO produtos (nome_produto, quantidade, marca, descricao, validade, tipo, perfil_img)
            values (:nome_produto, :quantidade, :marca, :descricao, :validade, :tipo, :perfil_img)");

            //get's
            $nome_produto = $user->getNome_produto();
            $quantidade = $user->getQuantidade();
            $marca = $user->getMarca();
            $descricao = $user->getDescricao();
            $validade = $user->getValidade();
            $tipo = $user->getTipo();
            $perfil_img = $user->getPerfil_img();

            //param's
            $sql->bindParam("nome_produto", $nome_produto);
            $sql->bindParam("quantidade", $quantidade);
            $sql->bindParam("marca", $marca);
            $sql->bindParam("descricao", $descricao);
            $sql->bindParam("validade", $validade);
            $sql->bindParam("tipo", $tipo);
            $sql->bindParam("perfil_img", $perfil_img);

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
            $sql = $minhaConexao->prepare("DELETE FROM produtos where id_produto = :id_produto");
            $sql->bindParam("id_produto", $id_produto);
            $id_produto = $user->getId_produto();

            $sql->execute();
        } catch (PDOException $e) {
            echo "Algo deu errado no produto" . $e->getmessage();
            exit();
        }
    }
}
