<?php require "Conexao.php";
class UsuarioDAO
{

    public function addPedido($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into mercado.pedido (valor_total, estadopedido, quantidade_item, nome, nomecliente, endereco, telefone)
            values (:valor_total, :estadopedido,:quantidade_item, :nome, :nomecliente, :endereco, :telefone)");
            $sql->bindParam("valor_total", $valor_total);
            $sql->bindParam("estadopedido", $estadopedido);
            $sql->bindParam("nome", $nome);
            $sql->bindParam("nomecliente", $nomecliente);
            $sql->bindParam("endereco", $endereco);
            $sql->bindParam("telefone", $telefone);

            //get
            $valor_total = $user->getValor_total();
            $estadopedido = $user->getEstadopedido();
            $nome = $user->getNome();
            $nomecliente = $user->getNomecliente();
            $endereco = $user->getEndereco();
            $telefone = $user->getTelefone();
            

            $sql->execute();
            //echo "incluido com sucesso";
            $last_id = $minhaConexao->lastinsertId();
            $user->setId_pedido($last_id);
            //echo "o numero gerado foi ",$last_id;
            return $last_id;
        } catch (PDOException $e) {
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function delPedido($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from mercado.pedido where id_pedido=:id_pedido");
            $sql->bindParam("id_pedido", $id_pedido);
            $id_pedido = $user->getId_pedido();

            $sql->execute();
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getmessage();
            exit();
        }
    }

    
}
