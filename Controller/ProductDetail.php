<?php

namespace App\Controllers;

class ProductDetail extends BaseController
{

    public function index()
    {
        $data['titulo'] = "CompraCerta - Detalhes do produto ";
        return view('ProductDetail', $data);
    }


    public function detalhes($produto_id)
    {

        $data['produto_id'] = $produto_id;
        $data['tituloProduto'] = 'Produto' . $produto_id;
        return view('produtos_detalhes', $data);
    }
}
