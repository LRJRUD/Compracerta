<?php
require "UsuariosDAO.php";

class Usuarios
{

    private $id_usuario;
    private $cpf;
    private $nome;
    private $email;
    private $senha;
    private $fone;
    private $cep;
    private $bairro;
    private $rua;
    private $n_casa;
    private $complemento;

    //Get´s
    function getId_usuario()
    {
        return $this->id_usuario;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getFone()
    {
        return $this->fone;
    }

    function getCep()
    {
        return $this->cep;
    }

    function getBairro()
    {
        return $this->bairro;
    }
    function getRua()
    {
        return $this->rua;
    }

    function getN_Casa()
    {
        return $this->n_casa;
    }

    function getComplemento()
    {
        return $this->complemento;
    }

    //Set´s
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setFone($fone)
    {
        $this->fone = $fone;
    }
    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    public function setN_Casa($n_casa)
    {
        $this->n_casa = $n_casa;
    }

    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    public function addUsuarios()
    {
        $UsuarioDAO = new UsuariosDAO();
        $UsuarioDAO->addUsuarios($this);
    }

    public function delUsuarios()
    {
        $UsuarioDAO = new UsuariosDAO();
        $UsuarioDAO->delUsuarios($this);
    }
}
