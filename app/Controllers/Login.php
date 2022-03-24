<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Peminjaman Lab'
        ];

        return view('auth/login', $data);
    }
}
