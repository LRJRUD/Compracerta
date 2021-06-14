<?php
require "Model/Usuario.php";
class ControllerDeleteUser
{
  private $Usuario;

  public function __construct()
  {
    $this->Usuario = new Usuario();
  }

  public function processaRequisicao()
  {
    //receber os dados do formulario e setar o objeto
    $this->Usuario->setId_Usuario($_POST['id_Usuario']);

    $this->Usuario->delUsuario();

    // header('Location:ListarLivro.php', true,302);
  }
}
