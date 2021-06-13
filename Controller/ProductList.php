<?php

namespace App\Controllers;

class ProductList extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - Produtos";
        return view('ProductList', $data);
    }

}
