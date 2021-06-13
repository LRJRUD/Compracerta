<?php

namespace App\Controllers;

class Checkout extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - Verificar";
        return view('Checkout', $data);
    }

}
