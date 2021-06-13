<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - O mercado ao alcance de um clique.";
        return view('Home', $data);
    }

}
