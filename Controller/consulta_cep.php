<?php

namespace App\Controllers;

class consulta_cep extends BaseController
{

  public function ajax()
  {
    $cep = $_POST['cep'];

    $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);

    $dados['sucesso'] = (string) $reg->resultado;
    $dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
    $dados['bairro']  = (string) $reg->bairro;

    echo json_encode($dados);
  }
}
