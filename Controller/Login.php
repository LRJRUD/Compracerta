<?php

namespace App\Controllers;

class Login extends BaseController {

    public function index() {
        $data['titulo'] = "CompraCerta - Login";
        return view('Login', $data);
    }

}
