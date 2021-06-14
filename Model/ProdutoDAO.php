<?php require "Conexao.php";
class produtosDAO
{

    public function addUsuario($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into produtos(NOMEproduto, quantidade, marca, descricao, validade, perfil_img, tipo) 
            values ( :NOMEproduto, :quantidade, :marca, :descricao, :validade, :perfil_img, :tipo);");
            $sql->bindParam("NOMEproduto", $NOMEproduto);
            $sql->bindParam("quantidade", $quantidade);
            $sql->bindParam("marca", $marca);
            $sql->bindParam("descricao", $descricao);
            $sql->bindParam("validade", $validade);
            $sql->bindParam("cep", $cep);
            $sql->bindParam("perfil_img", $perfil_img);
            $sql->bindParam("tipo", $tipo);
            
            //get
            $NOMEproduto = $user->getNOMEproduto();
            $quantidade = $user->getquantidade();
            $marca = $user->getmarca();
            $descricao = $user->getdescricao();
            $validade = $user->getvalidade();
            $perfil_img = $user->getperfil_img();
            $tipo = $user->gettipo();
            

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

    public function delProdutos($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from mercado.usuario where IDproduto=:IDproduto");
            $sql->bindParam("IDproduto", $IDproduto);
            $IDproduto = $user->getIDpdotudo();

            $sql->execute();
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getmessage();
            exit();
        }
    }

    }
}