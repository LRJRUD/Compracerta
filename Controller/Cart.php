<?php

namespace App\Controllers;

class Cart extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - Carrinho";
        return view('Cart', $data);
    }

}
