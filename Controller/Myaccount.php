<?php

namespace App\Controllers;

class Myaccount extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - Minha conta ";
        return view('Myaccount', $data);
    }

}
