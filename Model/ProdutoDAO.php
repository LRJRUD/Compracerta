<?php require "Conexao.php";
class UsuarioDAO
{

    public function addProduto($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into mercado.produto (NOMEproduto, quantidade, marca, descricao, validade, perfil_img, tipo)
            values (:NOMEproduto, :quantidade,:marca, :descricao, :validade, :perfil_img, :tipo)");
            $sql->bindParam("NOMEproduto", $NOMEproduto);
            $sql->bindParam("quantidade", $quantidade);
            $sql->bindParam("marca", $marca);
            $sql->bindParam("descricao", $descricao);
            $sql->bindParam("validade", $validade);
            $sql->bindParam("perfil_img", $perfil_img);
            $sql->bindParam("tipo", $tipo);

            //get
            $NOMEproduto = $user->NOMEproduto();
            $quantidade = $user->quantidade();
            $nome = $user->getNome();
            $marca = $user->marca();
            $descricao = $user->descricao();
            $validade = $user->validade();
            $perfil_img = $user->perfil_img();
            $tipo = $user->tipo();
            
            

            $sql->execute();
            //echo "incluido com sucesso";
            $last_id = $minhaConexao->lastinsertId();
            $user->setIDproduto($last_id);
            //echo "o numero gerado foi ",$last_id;
            return $last_id;
        } catch (PDOException $e) {
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }

    public function delProduto($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from mercado.produto where IDproduto=:IDproduto");
            $sql->bindParam("IDproduto", $IDproduto);
            $IDproduto = $user->getIDproduto();

            $sql->execute();
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getmessage();
            exit();
        }
    }

    
}
