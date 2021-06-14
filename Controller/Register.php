<?php 
require "Model/Usuario.php";
class Register{
   private $usuario;

   public function __construct(){
      $this->usuario = new Usuario();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto

        $this->usuario->setNome($_POST['nome']);
        $this->usuario->setEmail($_POST['email']);
        $this->usuario->setSenha($_POST['senha']);
        $this->usuario->setFone($_POST["fone"]);
        $this->usuario->setCep($_POST["cep"]);
        $this->usuario->setBairro($_POST["bairro"]);
        $this->usuario->setRua($_POST["rua"]);
        $this->usuario->setN_Casa($_POST["n_Casa"]);
        $this->usuario->setComplemento($_POST["complemento"]);

        $this->usuario->addUsuario();
        
      header('Location:Home.php', true,302);
      
   }
}
   
   
?>
