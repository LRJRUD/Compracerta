<?php
require "Conexao.php";

class UsuariosDAO
{
    public function addUsuarios($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("insert into usuarios (cpf, nome, email, senha, fone, cep, bairro, rua, n_casa, complemento)
            values (:cpf, :nome, :email, :senha, :fone, :cep, :bairro, :rua, :n_casa, :complemento)");

            //get's
            $cpf = $user->getCpf();
            $nome = $user->getNome();
            $email = $user->getEmail();
            $senha = $user->getSenha();
            $fone = $user->getFone();
            $cep = $user->getCep();
            $bairro = $user->getBairro();
            $rua = $user->getRua();
            $n_casa = $user->getN_casa();
            $complemento = $user->getComplemento();

            //param's
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("nome", $nome);
            $sql->bindParam("email", $email);
            $sql->bindParam("senha", $senha);
            $sql->bindParam("fone", $fone);
            $sql->bindParam("cep", $cep);
            $sql->bindParam("bairro", $bairro);
            $sql->bindParam("rua", $rua);
            $sql->bindParam("n_casa", $n_casa);
            $sql->bindParam("complemento", $complemento);

            $sql->execute();

            //echo "incluido com sucesso";
            $last_id = $minhaConexao->lastInsertId();
            $user->setId_usuario($last_id);
            //echo "o numero gerado foi ",$last_id;
            return $last_id;
        } catch (\Exception $e) {
            die($e->getMessage());
            return false;
        }
    }

    public function delUsuarios($user)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("DELETE FROM usuarios where id_usuario = :id_usuario");
            $sql->bindParam("id_usuario", $id_usuario);
            $id_usuario = $user->getId_usuario();

            $sql->execute();
        } catch (PDOException $e) {
            echo "Algo deu errado no usuario" . $e->getmessage();
            exit();
        }
    }
}
