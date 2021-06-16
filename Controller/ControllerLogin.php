<?php
class ControllerLogin
{
    public $usuarioDAO;

    public function index()
    {
        // $data['titulo'] = "CompraCerta - Login";
        // return view('Login', $data);
        return 'olá';
    }

    public function authenticate()
    {
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        if ($this->UsuarioDAO->getByLogin($email, $senha)) {

            $user = $this->UsuarioDAO->getByLogin($email, $senha);

            $this->session->set_userdata('id_usuario', $user->getId_Usuario());
            $this->session->set_userdata('cpf', $user->getCpf());
            $this->session->set_userdata('nome', $user->getNome());
            $this->session->set_userdata('email', $user->getEmail());
            $this->session->set_userdata('senha', $user->getSenha());
            $this->session->set_userdata('fone', $user->getFone());
            $this->session->set_userdata('cep', $user->getCEP());
            $this->session->set_userdata('bairro', $user->getBairro());
            $this->session->set_userdata('rua', $user->getRua());
            $this->session->set_userdata('n_casa', $user->getN_Casa());
            $this->session->set_userdata('complemento', $user->getComplemento());
        }
        if ($this->user->getByLogin()) {
            // echo "<script>alert('SALVEI SEUS DADOS  !'); </script>";
            header('Location:Home.php', true, 302);
        }
        // Deu ruim
        header('Location:404.php', true, 302);
    }

    }

