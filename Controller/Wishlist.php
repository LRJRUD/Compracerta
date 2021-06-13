<?php

namespace App\Controllers;

class Wishlist extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - Lista de desejos";
        return view('Wishlist', $data);
    }

}
