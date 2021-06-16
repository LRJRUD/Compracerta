<?php
require "Model/Usuarios.php";
class ControllerRegister
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

        if ($this->user->addUsuarios()) {
            // echo "<script>alert('SALVEI SEUS DADOS  !'); </script>";
            header('Location:Home.php', true, 302);
        }
        // Deu ruim
        header('Location:404.php', true, 302);
    }

    public function ajax()
    {
        $cep = $_POST['cep'];

        $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);

        $dados['sucesso'] = (string) $reg->resultado;
        $dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
        $dados['bairro']  = (string) $reg->bairro;

        echo json_encode($dados);
    }
}
