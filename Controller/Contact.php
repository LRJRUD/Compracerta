<?php

namespace App\Controllers;

class Contact extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - Contato";
        return view('Contact', $data);
    }

}
