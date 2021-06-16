<?php
require "Model/Usuarios.php";
class ControllerDeleteUser
{

  public function __construct()
  {
    $this->user = new Usuarios();
  }

  public function processaRequisicao()
  {
    //receber os dados do formulario e setar o objeto
    $this->user->setId_usuario($_POST['id_usuario']);

    $this->user->delUsuarios();

    // header('Location:ListarLivro.php', true,302);
  }
}
