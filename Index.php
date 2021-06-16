<?php

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
  $url = strtoupper($_GET['url']);
  echo $url;
  switch ($url) {
    case "NOVOUSUARIO":
      require "Controller/ControllerFormUser.php";
      $controlador = new ControllerFormUser();
      $controlador->processaRequisicao();
      break;
    case "VIEW/DELETARUSUARIOS":
      require "Controller/ControllerDeleteUser.php";
      $controlador = new ControllerDeleteUser();
      $controlador->processaRequisicao();
      break;
    case "VIEW/ADDUSUARIOS":
      require "Controller/Register.php";
      $controlador = new Register();
      $controlador->processaRequisicao();
      break;
    case "VIEW/ADDPRODUTO":
      require "Controller/RegisterProduct.php";
      $controlador = new RegisterProduct();
      $controlador->processaRequisicao();
      break;
      case "VIEW/PRODUTODAO.PHP":
        require "Controller/MyAccountAdm.php";
        $controlador = new MyAccountAdm();
        $controlador->processaRequisicao();
      break; 
    default:
      break;
  }
} else                     //senão, vai para uma página padrão, neste caso a home do site
  $url = '404.php';
