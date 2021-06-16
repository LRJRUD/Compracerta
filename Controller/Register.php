<?php
require "Model/Usuarios.php";
class Register
{

    private $user;

    public function __construct()
    {
        $this->user = new Usuarios();
    }

    public function processaRequisicao()
    {
        //receber os dados do formulario e setar o objeto
        $this->user->setCpf($_POST['cpf']);
        $this->user->setNome($_POST['nome']);
        $this->user->setEmail($_POST['email']);
        $this->user->setSenha($_POST['senha']);
        $this->user->setFone($_POST["fone"]);
        $this->user->setCep($_POST["cep"]);
        $this->user->setBairro($_POST["bairro"]);
        $this->user->setRua($_POST["rua"]);
        $this->user->setN_Casa($_POST["n_Casa"]);
        $this->user->setComplemento($_POST["complemento"]);

        $this->user->addUsuarios();
        header('Location:Home.php', true, 302);
    }
}
