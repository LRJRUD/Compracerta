<?php
class UsuarioDAO extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function addUsuario($user)
    {
        $query = $this->db->query("INSERT INTO Usuario (cpf, nome, email, senha,
         fone, cep, bairro, rua, n_casa, complemento, is_online) 
         VALUES ('" . $user->getCpf() . "', '" . $user->getNome() . "', 
         '" . $user->getEmail() . "', '" . $user->getSenha() . "', '" . $user->getFone() . "', 
         '" . $user->getCep() . "', '" . $user->getBairro() . "', '" . $user->getRua() . "', 
         '" . $user->getN_Casa() . "', '" . $user->getComplemento() . "', 
         '" . $user->getIs_Online() . "')");

        if ($query) {

            $user->setId_Usuario($this->db->insert_id());
            return true;
        } else {
            return false;
        }
    }

    function updateUsuario(Usuario $user)
    {
        {
            $this->db->query(
                "UPDATE Usuario SET
                        cpf = '" . $user->getCpf() . "',
                        nome = '" . $user->getNome() . "',
                        email = '" . $user->getEmail() . "', 
                        senha = '" . $user->getSenha() . "', 
                        fone = '" . $user->getFone() . "', 
                        cep = '" . $user->getCep() . "', 
                        bairro = '" . $user->getBairro() . "', 
                        rua = '" . $user->getRua() . "', 
                        n_casa = '" . $user->getN_Casa() . "', 
                        is_online = '" . $user->getIs_Online() . "', 
                        WHERE
                        id_usuario = '" . $user->getId_Usuario() . "'"
            );
            return (bool) $this->db->affected_rows();
        }
    }
}
