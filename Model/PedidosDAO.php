<?php
require "Conexao.php";

class PedidosDAO
{

    public function addPedidos($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("INSERT INTO pedidos (valor_total, estado_pedido, quantidade_item, nome, nome_cliente, endereco, telefone)
            values (:valor_total, :estado_pedido, :quantidade_item, :nome, :nome_cliente, :endereco, :telefone)");

            //get
            $valor_total = $user->getValor_total();
            $estado_pedido = $user->getEstado_pedido();
            $quantidade_item = $user->getQuantidade_item();
            $nome = $user->getNome();
            $nome_cliente = $user->getNome_cliente();
            $endereco = $user->getEndereco();
            $telefone = $user->getTelefone();

            //param's
            $sql->bindParam("valor_total", $valor_total);
            $sql->bindParam("estado_pedido", $estado_pedido);
            $sql->bindParam("quantidade_item", $quantidade_item);
            $sql->bindParam("nome", $nome);
            $sql->bindParam("nome_cliente", $nome_cliente);
            $sql->bindParam("endereco", $endereco);
            $sql->bindParam("telefone", $telefone);

            $sql->execute();

            //echo "incluido com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $user->setId_pedido($last_id);
            //echo "o numero gerado foi ",$last_id;
            return $last_id;
        } catch (PDOException $e) {
            die($e->getMessage());
            return 0;
        }
    }

    public function delPedidos($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("DELETE FROM pedidos where id_pedido = :id_pedido");
            $sql->bindParam("id_pedido", $id_pedido);
            $id_pedido = $user->getId_pedido();

            $sql->execute();
        } catch (PDOException $e) {
            echo "Algo deu errado no pedido" . $e->getmessage();
            exit();
        }
    }
}
