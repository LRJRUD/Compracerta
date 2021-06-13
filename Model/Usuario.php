<?php
class Usuario extends CI_Model
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
    private $n_Casa;
    private $complemento;
    private $is_online;

    //Get´s
    function getId_Usuario()
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

    function getComplemento()
    {
        return $this->complemento;
    }

    function getRua()
    {
        return $this->rua;
    }

    function getN_Casa()
    {
        return $this->n_Casa;
    }

    function getIs_Online()
    {
        return $this->is_online;
    }

    //Set´s
    public function setId_Usuario($id_usuario)
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
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }
    public function setN_Casa($n_Casa)
    {
        $this->n_Casa = $n_Casa;
    }

    public function setIs_Online($is_online)
    {
        $this->is_online = $is_online;
    }
}
?>
