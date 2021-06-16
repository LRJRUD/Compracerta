<?php
session_start();
require "Conexao.php";

$btnLogar = filter_input(INPUT_POST, 'btnLogar', FILTER_SANITIZE_STRING);
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

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
            $sql = $minhaConexao->prepare("insert into usuarios where id_usuario = :id_usuario");
            $sql->bindParam("id_usuario", $id_usuario);
            $id_usuario = $user->getId_usuario();

            $sql->execute();
        } catch (PDOException $e) {
            echo "Algo deu errado no usuario" . $e->getmessage();
            exit();
        }
    }

    function getByLogin($user)
    {

        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from usuarios where login = :email and senha = :senha LIMIT 1");

            if ($sql->row()) {

                $row = $sql->row();

                $user = new Usuarios();

                $user->setId_usuario($row->id_usuario);
                $user->setCpf($row->Cpf);
                $user->setNome($row->nome);
                $user->setEmail($row->email);
                $user->setSenha($row->senha);
                $user->setFone($row->fone);
                $user->setCep($row->cep);
                $user->setBairro($row->bairro);
                $user->setRua($row->rua);
                $user->setN_casa($row->N_casa);
                $user->setComplemento($row->complemento);


                $sql->execute();
                return $user;
            }
        } catch (PDOException $e) {
            echo "Algo deu errado no login" . $e->getmessage();
            exit();
        }
    }

    // //PRECISA REVISAR
    // public function mensagemEntrada()
    // {
    //     if ($btnLogar) {
    //         $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    //         $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    //         if ((!empty($email)) and (!empty($senha))) {

    //             $result_usuario = "select id_Usuario, nome, email, senha from usuarios where usuario = '$usuario' limit 1";
    //             $resultado_usuario = mysqli_query($minhaConexao, $result_usuario);
    //             if ($resultado_usuario) {
    //                 $row_usuario = mysqli_fetch_assoc($resultado_usuario);
    //                 if (password_verify($senha, $row_usuario['senha'])) {
    //                     $_SESSION['id_usuario'] = $row_usuario['id_usuario'];
    //                     $_SESSION['nome'] = $row_usuario['nome'];
    //                     $_SESSION['email'] = $row_usuario['email'];
    //                     header('Location:Home.php', true, 302);
    //                 } else {
    //                     $_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreta!</div>";
    //                     header('Location:Login.php', true, 302);
    //                 }
    //             }
    //         } else {
    //             $_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreta!</div>";
    //             header('Location:Login.php', true, 302);
    //         }
    //     } else {
    //         $_SESSION['msg'] = "<div class='alert alert-danger'>Página não encontrada</div>";
    //         header('Location:Login.php', true, 302);
    //     }
    // }
    // //PRECISA REVISAR
    // public function mensagemSaida()
    // {
    //     unsert($_SESSION['id_usuario'], $_SESSION['nome'], $_SESSION['email']);

    //     $_SESSION['msg'] = "<div class='alert alert-sucess'>Deslogado com sucesso</div>";
    //     header("location: Login.php");
    // }
}
