<?php require "Conexao.php";
class UsuarioDAO
{
    public function addUsuario($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into usuario (cpf, nome, email, senha, fone, cep, bairro, rua, n_Casa, complemento)
            values (:cpf, :nome,:email, :senha, :fone, :cep, :bairro, :rua, :n_Casa, :complemento)");

            //get
            $cpf = $user->getCpf();
            $nome = $user->getNome();
            $email = $user->getEmail();
            $senha = $user->getSenha();
            $fone = $user->getFone();
            $cep = $user->getCep();
            $bairro = $user->getBairro();
            $rua = $user->getRua();
            $n_Casa = $user->getN_Casa();
            $complemento = $user->getComplemento();

            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("nome", $nome);
            $sql->bindParam("email", $email);
            $sql->bindParam("senha", $senha);
            $sql->bindParam("fone", $fone);
            $sql->bindParam("cep", $cep);
            $sql->bindParam("bairro", $bairro);
            $sql->bindParam("rua", $rua);
            $sql->bindParam("n_Casa", $n_Casa);
            $sql->bindParam("complemento", $complemento);

            $sql->execute();
            //echo "incluido com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $user->setId_Usuario($last_id);
            //echo "o numero gerado foi ",$last_id;
            return $last_id;
        } catch (\Exception $e) {
            die($e->getMessage());
            return false;
        }
    }

    public function delUsuario($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("delete from mercado.usuario where id_usuario=:id_usuario");
            $sql->bindParam("id_usuario", $id_usuario);
            $id_usuario = $user->getId_Usuario();

            $sql->execute();
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getmessage();
            exit();
        }
    }
}
