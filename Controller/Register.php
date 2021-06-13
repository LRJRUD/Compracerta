<?php

namespace System\core;

use CI_Controller;
use Usuario;

class Register extends CI_Controller
{

    public $Usuario;

    public function __construct()
    {

        parent::__construct();

        $this->load->model('Usuario');
        $this->load->model('UsuarioDAO');
    }

    public function index()
    {
        $data['titulo'] = "CompraCerta - Cadastro";
        return view('Register', $data);
    }

    public function checkAcess()
    {

        if ($this->session->userdata('online') == TRUE) {

            return true;
        } else {
            return false;
        }
    }

    public function authenticate()
    {
        if ($this->checkAcess()) {
            redirect('logout');
        } else {

            $email = $this->input->post('email');
            $senha = $this->input->post('senha');

            if ($this->UsuarioDAO->getByLogin($email, $senha)) {

                $user = $this->UsarioDAO->getbylogin($email, $senha);

                $this->session->set_userdata('id_usuario', $user->getIdUsuario());
                $this->session->set_userdata('cpf', $user->getCpf());
                $this->session->set_userdata('nome', $user->getNome());
                $this->session->set_userdata('email', $user->getEmail());
                $this->session->set_userdata('senha', $user->getSenha());
                $this->session->set_userdata('fone', $user->getFone());
                $this->session->set_userdata('cep', $user->getCep());
                $this->session->set_userdata('bairro', $user->getBairro());
                $this->session->set_userdata('rua', $user->getRua());
                $this->session->set_userdata('n_casa', $user->getN_Casa());
                $this->session->set_userdata('complemento', $user->getComplemento());
                $this->session->set_userdata('is_online', $user->getIs_Online());

                redirect('/');
            } else {
                redirect('/logout');
            }
        }
    }

    public function login()
    {

        if ($this->checkAcess()) {
            redirect('logout');
        } else {

            $this->load->view('master/headerForm');
            $this->load->view('login');
            $this->load->view('master/footerForm');
        }
    }

    public function logout()
    {

        $this->session->sess_destroy();

        redirect('login');
    }

    public function cadastro()
    {

        if ($this->checkAcess()) {
            redirect('logout');
        } else {

            $this->data['result'] = NULL;
            $this->data['erros'] = NULL;

            $user = new Usuario();

            if (!empty($this->input->post('usuario'))) {

                $this->form_validation->set_rules('usuario[email]', 'email', 'required', array('required' => 'Você deixou o campo email em branco.'));

                if ($this->forma_Validate->run() == FALSE) {
                    $this->data['result'] = 'error';
                    $this->data['errors'] = validation_errors('<li>', '</li>');
                } else {
                    $post = $this->input->post('email');

                    $user->setCpf($post['']);
                    $user->setNome($post['']);
                    $user->setEmail($post['']);
                    $user->setSenha($post['']);
                    $user->setFone($post['']);
                    $user->setComplemento($post['']);
                    $user->setCep($post['']);
                    $user->setBairro($post['']);
                    $user->setRua($post['']);

                    $add = $this->UserDAO->addUsuario($user);

                    if ($add) {
                        $this->data['result'] = 'sucess';
                        $user = new Usuario();
                    } else {
                        $this->data['result'] = 'error';
                    }
                }
            }

            $this->data['usuario'] = $user;

            $this->load->view('master/headerForm', $this->data);
            $this->load->view('view/Register', $this->data);
            $this->load->view('master/footerForm', $this->data);
        }
    }
}
