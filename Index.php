<?php
//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
  $url =  strtoupper($_GET['url']);
  // echo $url;
  switch ($url) {
    case "ADDUSUARIO":
      require "Controller/Register.php";
      $controlador = new Register();
      $controlador->processaRequisicao();
      break;
    case "NOVOUSUARIO":
      require "Controller/ControllerFormUser.php";
      $controlador = new ControllerFormUser();
      $controlador->processaRequisicao();
      break;
    case "DELETARUSUARIO":
      require "Controller/ControllerDeleteUser.php";
      $controlador = new ControllerDeleteUser();
      $controlador->processaRequisicao();
      break;
  }
} else                     //senão, vai para uma página padrão, neste caso a home do site
  $url = '404.php';
