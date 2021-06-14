<?php

class Usuario
{

  public $UserDAO;

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

      if ($this->UserDAO->getByLogin($email, $senha)) {

        $user = $this->UserDAO->getByLogin($email, $senha);

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

      $this->load->view('templates/header_none');
      $this->load->view('pages/login');
      $this->load->view('templates/footer_none');
    }
  }

  public function logout()
  {

    $this->session->sess_destroy();

    redirect('login');
  }
}
